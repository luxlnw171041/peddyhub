<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Check_in;
use App\Models\Partner;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Check_inController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $requestData = $request->all();
        $perPage = 25;
        $data_user = Auth::user();

        $check_in_at = $data_user->partner;

        $select_date = $request->get('select_date');
        $select_time_1 = $request->get('select_time_1');
        $select_time_2 = $request->get('select_time_2');
        $select_name = $request->get('select_name');

       
        // ชื่อ อย่างเดียว
        if ( !empty($select_name) and empty($select_time_1) and empty($select_date) ) {
            $check_in = Check_in::where('check_in_at', $data_user->partner)
                ->where('user_id','LIKE', "%$select_name%")
                ->latest()->paginate($perPage);
        }
        // วันที่ อย่างเดียว
        else if ( !empty($select_date) and empty($select_time_1) and empty($select_name) ) {
            $check_in = Check_in::where('check_in_at', $data_user->partner)
                ->whereDate('created_at', $select_date)
                ->latest()->paginate($perPage);
        }
        // วันที่ และ ชื่อ.
        else if ( !empty($select_date) and !empty($select_name) and empty($select_time_1) ) {
            $check_in = Check_in::where('check_in_at', $data_user->partner)
                ->where('user_id','LIKE', "%$select_name%")
                ->whereDate('created_at', $select_date)
                ->latest()->paginate($perPage);
        }
        // วันที่ และ เวลา
        else if ( !empty($select_date) and !empty($select_time_1) and empty($select_name) ) {
            $date_and_time_1 =  $select_date . " " . $select_time_1 ;
            $date_and_time_1 = date("Y/m/d H:i" , strtotime($date_and_time_1));

            $date_and_time_2 =  $select_date . " " . $select_time_2 ;
            $date_and_time_2 = date("Y/m/d H:i" , strtotime($date_and_time_2));

            $check_in = Check_in::where('check_in_at', $data_user->partner)
                ->whereBetween('created_at', [$date_and_time_1, $date_and_time_2])
                ->latest()->paginate($perPage);
        }
        // วันที่ และ เวลา และ ชื่อ
        else if ( !empty($select_date) and !empty($select_time_1) and !empty($select_name) ) {
            $date_and_time_1 =  $select_date . " " . $select_time_1 ;
            $date_and_time_1 = date("Y/m/d H:i" , strtotime($date_and_time_1));

            $date_and_time_2 =  $select_date . " " . $select_time_2 ;
            $date_and_time_2 = date("Y/m/d H:i" , strtotime($date_and_time_2));

            $check_in = Check_in::where('check_in_at', $data_user->partner)
                ->whereBetween('created_at', [$date_and_time_1, $date_and_time_2])
                ->where('user_id','LIKE', "%$select_name%")
                ->latest()->paginate($perPage);
        }
        // ว่าง
        else {
            $check_in = Check_in::where('check_in_at', $data_user->partner)->latest()->paginate($perPage);
        }

        return view('check_in.index', compact('check_in','check_in_at'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $date_now = date("Y/m/d H:i:s");
        $location =  $request->get('location');

        $data_partner = Partner::where('id' , $location)->get();

        $real_name = Auth::user()->profile->real_name;
        $phone_user = Auth::user()->profile->phone;

        return view('check_in.create', compact('location', 'date_now' , 'data_partner','real_name','phone_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();

        if ($requestData['check_in_out'] == "check_in") {
            $requestData['time_out'] = null ;
        }else if($requestData['check_in_out'] == "check_out"){
            $requestData['time_in'] = null ;
        }
        
        Check_in::create($requestData);

        $data_user = Profile::where('id' , $requestData['user_id'])->get();
        
        foreach ($data_user as $user) {
            if (empty($user->check_in_at)) {
                $check_in_all = array($requestData['check_in_at']) ;
            }else{
                $check_in_all = json_decode($user->check_in_at) ;
                if (in_array($requestData['check_in_at'] , $check_in_all)){
                    $check_in_all = $check_in_all ;
                }
                else{   
                    array_push($check_in_all , $requestData['check_in_at']) ;
                }
            }
        }

        DB::table('profiles')
            ->where('id', $requestData['user_id'])
            ->update([
                'check_in_at' => $check_in_all,
        ]);

        if (!empty($requestData['time_in'])) {
            $time = $requestData['time_in'] ;
            $type = "CHECK IN" ;
        }

        if (!empty($requestData['time_out'])) {
            $time = $requestData['time_out'] ;
            $type = "CHECK OUT" ;
        }
        // เบอร์
        if(!empty($requestData['phone_user'])){
            DB::table('profiles')
              ->where('id', $requestData['user_id'])
              ->update([
                'phone' => $requestData['phone_user'],
            ]);
        }
        //ชื่อจริง
        if(!empty($requestData['real_name'])){
            DB::table('profiles')
              ->where('id', $requestData['user_id'])
              ->update([
                'real_name' => $requestData['real_name'],
            ]);
        }
        $data_in_out = check_in::where('user_id', $requestData['user_id'])
            ->where('check_in_at', $requestData['check_in_at'])
            ->latest()
            ->take(3)
            ->get();   

        $check_in_at = $requestData['input_name_partner'] ;

        $time = str_replace("T"," ",$time);


        // return redirect('check_in')->with('flash_message', 'Check_in added!');
        return view('check_in.check_in_finish', compact('time','type','data_in_out','check_in_at'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $check_in = Check_in::findOrFail($id);

        return view('check_in.show', compact('check_in'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $check_in = Check_in::findOrFail($id);

        return view('check_in.edit', compact('check_in'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $check_in = Check_in::findOrFail($id);
        $check_in->update($requestData);

        return redirect('check_in')->with('flash_message', 'Check_in updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Check_in::destroy($id);

        return redirect('check_in')->with('flash_message', 'Check_in deleted!');
    }
    public function welcome_check_in_line(Request $request)
    {
        $location = $request->get('location');

        if(Auth::check()){
            return redirect('check_in/create?location=' . $location);
        }else{
            return redirect('/login/line?redirectTo=check_in/create?location=' . $location);
        }
    }

}