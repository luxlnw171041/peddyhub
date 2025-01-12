<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Pet;
use App\Models\Pet_Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {   
        $user = Auth::user();
        $keyword = $request->get('search');
        $perPage = 25;



        if (!empty($keyword)) {
            $pet = Pet::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('birth', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('size', 'LIKE', "%$keyword%")
                ->orWhere('age', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pet = Pet::where('user_id', $user->id)
            ->latest()->paginate($perPage);
        }

        return view('pet.index', compact('pet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = Pet_Category::all(['id', 'name']);

        $user = Auth::user();
        $pet_category_id = 0;
        $photo = 0;

        return view('pet.create' , compact('category' ,'pet_category_id','photo'));
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

        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_2')) {
            $requestData['photo_2'] = $request->file('photo_2')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_3')) {
            $requestData['photo_3'] = $request->file('photo_3')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate')) {
            $requestData['certificate'] = $request->file('certificate')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate_2')) {
            $requestData['certificate_2'] = $request->file('certificate_2')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate_3')) {
            $requestData['certificate_3'] = $request->file('certificate_3')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_passport')) {
            $requestData['photo_passport'] = $request->file('photo_passport')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_vaccine')) {
            $requestData['photo_vaccine'] = $request->file('photo_vaccine')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_vaccine_2')) {
            $requestData['photo_vaccine_2'] = $request->file('photo_vaccine_2')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_vaccine_3')) {
            $requestData['photo_vaccine_3'] = $request->file('photo_vaccine_3')->store('uploads', 'public');
        }
       
        if ($request->hasFile('photo_medical_certificate')) {
            $requestData['photo_medical_certificate'] = $request->file('photo_medical_certificate')->store('uploads', 'public');
        }
        $requestData['user_id'] = Auth::id(); 

        if (!empty($requestData['select_province'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'changwat_th' => $requestData['select_province'],
                    'amphoe_th' => $requestData['select_amphoe'],
                    'tambon_th' => $requestData['select_tambon'],
                    'phone' => $requestData['phone_user'],
                ]);
        }  
        if (!empty($requestData['photo_id_card'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'photo_id_card' => $requestData['photo_id_card'] = $request->file('photo_id_card')->store('uploads', 'public')
                ]);
        } 

        if (!empty($requestData['photo_passport'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'photo_passport' => $requestData['photo_passport'] = $request->file('photo_passport')->store('uploads', 'public')
                ]);
        } 

        $alert_arr = array();
        if ( empty($requestData['input_alert_lost_pet']) ) {
            if (!empty($requestData['check_all_alert'])) {
                $alert_arr = array('1','2','3','4','5','6') ;
            }else{
                if (!empty($requestData['check_categories_1'])) {
                    array_push($alert_arr , '1') ;
                }
                if (!empty($requestData['check_categories_2'])) {
                    array_push($alert_arr , '2') ;
                }
                if (!empty($requestData['check_categories_3'])) {
                    array_push($alert_arr , '3') ;
                }
                if (!empty($requestData['check_categories_4'])) {
                    array_push($alert_arr , '4') ;
                }
                if (!empty($requestData['check_categories_5'])) {
                    array_push($alert_arr , '5') ;
                }
                if (!empty($requestData['check_categories_6'])) {
                    array_push($alert_arr , '6') ;
                }
            }
            
            DB::table('profiles')
                ->where('user_id', $requestData['user_id'])
                ->update([
                    'alert_lost_pet' => $alert_arr,
            ]);
        }
        
        Pet::create($requestData);

        $data_pet_last = Pet::latest()->first();

        // QR-Code ในบัตรประจำตัวสัตว์เลี้ยง
        $url = "https://chart.googleapis.com/chart?cht=qr&chl=https://www.peddyhub.com/user_pet/" . $data_pet_last->id . "&chs=500x500&choe=UTF-8&chld=M|0" ;

        $img = storage_path("app/public")."/uploads". "/" . 'pet_id_' . $data_pet_last->id  . '.png';
        // Save image
        file_put_contents($img, file_get_contents($url));

        $qr_code_card = Image::make( $img );
        
        //logo peddyhub
        $logo_ph = Image::make(public_path('peddyhub/images/logo/logo-5.png'));
        $logo_ph->resize(80,80);
        $qr_code_card->insert($logo_ph,'center')->save();

        DB::table('pets')
              ->where('id', $data_pet_last->id)
              ->update([
                'qr_code' => "uploads/" . 'pet_id_' . $data_pet_last->id  . '.png',
          ]);

        // ------------------------------

        // QR-Code Check List
        $url_checklist = "https://chart.googleapis.com/chart?cht=qr&chl=https://www.peddyhub.com/view_qr_code_checklist/" . $data_pet_last->id . "&chs=500x500&choe=UTF-8&chld=M|0" ;

        $img_checklist = storage_path("app/public")."/uploads". "/" . 'qr_code_checklist_pet_id_' . $data_pet_last->id  . '.png';
        // Save image
        file_put_contents($img_checklist, file_get_contents($url_checklist));

        $qr_code_checklist = Image::make( $img_checklist );
        $qr_code_checklist->insert($logo_ph,'center')->save();

        DB::table('pets')
              ->where('id', $data_pet_last->id)
              ->update([
                'qr_code_checklist' => "uploads/" . 'qr_code_checklist_pet_id_' . $data_pet_last->id  . '.png',
          ]);

        return redirect('user')->with('flash_message', 'Pet added!');
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
        $pet = Pet::findOrFail($id);
        $year = Pet::where('id' , '=' ,$id)->get();

        return view('pet.show', compact('pet'));
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
        $user_id = Auth::id();
        $check_user = Pet::where('user_id',$user_id )->where('id',$id )->get();
        $category = Pet_Category::all(['id', 'name']);

        foreach ($check_user as $key ) {
            $user = $key->id ;
        }
        if (empty($user)) {

            return view('/errors/404');

       }else{
            $pet = Pet::findOrFail($id);
            $pet_category_id = $pet->pet_category_id;
            $photo = $pet->photo;

            return view('pet.edit', compact('pet' ,'category','pet_category_id','photo'));
       }
        
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
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_2')) {
            $requestData['photo_2'] = $request->file('photo_2')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_3')) {
            $requestData['photo_3'] = $request->file('photo_3')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate')) {
            $requestData['certificate'] = $request->file('certificate')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate_2')) {
            $requestData['certificate_2'] = $request->file('certificate_2')->store('uploads', 'public');
        }
        if ($request->hasFile('certificate_3')) {
            $requestData['certificate_3'] = $request->file('certificate_3')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_medical_certificate')) {
            $requestData['photo_medical_certificate'] = $request->file('photo_medical_certificate')->store('uploads', 'public');
        } 
        if ($request->hasFile('photo_vaccine')) {
            $requestData['photo_vaccine'] = $request->file('photo_vaccine')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_vaccine_2')) {
            $requestData['photo_vaccine_2'] = $request->file('photo_vaccine_2')->store('uploads', 'public');
        }
        if ($request->hasFile('photo_vaccine_3')) {
            $requestData['photo_vaccine_3'] = $request->file('photo_vaccine_3')->store('uploads', 'public');
        }   
        

        $requestData['user_id'] = Auth::id();
        if (!empty($requestData['select_province'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'changwat_th' => $requestData['select_province'],
                    'amphoe_th' => $requestData['select_amphoe'],
                    'tambon_th' => $requestData['select_tambon']
                ]);
        } 
        if (!empty($requestData['photo_id_card'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'photo_id_card' => $requestData['photo_id_card'] = $request->file('photo_id_card')->store('uploads', 'public')
                ]);
        } 

        if (!empty($requestData['photo_passport'])) {
            DB::table('profiles')
                ->where([ 
                        ['user_id', $requestData['user_id']],
                    ])
                ->update([
                    'photo_passport' => $requestData['photo_passport'] = $request->file('photo_passport')->store('uploads', 'public')
                ]);
        } 

        $pet = Pet::findOrFail($id);
        $pet->update($requestData);

        DB::table('pets')
                ->where('id', $id)
                ->update(['rabies' => null]);
        DB::table('pets')
                ->where('id', $id)
                ->update(['flea' => null]);
                
        if(!empty($requestData['login'])){
            return Redirect("https://lin.ee/Bvi9Zr9");
        }
        else{
            return redirect('user')->with('flash_message', 'Pet updated!');
        }

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

        DB::table('lost__pets')
        ->where([ 
                ['pet_id', $id],
            ])
        ->update([
            'status' => "delete",
        ]);

        Pet::destroy($id);

        return redirect()->back()->with('flash_message', 'Pet deleted!');
    }

    public function welcome_line()
    {
        if(Auth::check()){
            return redirect('pet/create');
        }else{
            return redirect('/login/line?redirectTo=pet/create');
        }
    }

    public function welcome_line_pet()
    {
        if(Auth::check()){
            return redirect('user#pets');
        }else{
            return redirect('/login/line?redirectTo=user#pets');
        }
    }

    public function welcome_line_Hospital_near()
    {
        if(Auth::check()){
            return redirect('/hospital_near');
        }else{
            return redirect('/login/line?redirectTo=hospital_near');
        }
    }

    public function welcome_line_petland_near()
    {
        if(Auth::check()){
            return redirect('/petland_near');
        }else{
            return redirect('/login/line?redirectTo=petland_near');
        }
    }

    public function edit_pet_login(Request $request , $pet_id)
    {
        if(Auth::check()){
                return redirect('pet/' . $pet_id . '/edit?login=line');
        }else{
                return redirect('login/line?redirectTo=pet/' . $pet_id . '/edit?login=line');
        }
    }
    public function edit_pet_airplane_login(Request $request , $pet_id)
    {
        if(Auth::check()){
                return redirect('pet/' . $pet_id . '/edit?login=line&edit=airplane');
        }else{
                return redirect('login/line?redirectTo=pet/' . $pet_id . '/edit?edit=airplane&login=line');
        }
    }
}
