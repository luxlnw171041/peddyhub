<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Blood_bank;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Blood_bankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $id = Auth::id();

        $petbank = Blood_bank::where('user_id', $id)
            ->groupBy('pet_id')
            ->get();
        $keyword = $request->get('search');
        $perPage = 25;

        
        //จำนวนสัตว์ทั้งหมด
        $count_pet = Blood_bank::where('user_id', $id)
            ->groupBy('pet_id')
            ->get()->count();


        // จำนวนคร้งทั้งหมด
        $count_time = Blood_bank::where('user_id', $id)
            ->selectRaw('count(pet_id) as count')
            ->count();


        //  ประมาณทั้งหมด
        $count_blood = Blood_bank::where('user_id', $id)
            ->selectRaw('sum(total_blood) as count')
            ->get();
            foreach ($count_blood as $item) {
                $total_blood = $item->count ;
            }
        

        if (!empty($keyword)) {
            $blood_bank = Blood_bank::where('pet_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('total_blood', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $blood_bank = Blood_bank::latest()->paginate($perPage);
        }

        return view('blood_bank.index', compact('blood_bank' ,'petbank' ,'count_time' ,'total_blood' ,'count_pet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user_id = Auth::id();

        $pet = Pet::where('user_id' , $user_id)->get();
        return view('blood_bank.create' , compact('pet' ));
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
        
        Blood_bank::create($requestData);

        return redirect('blood_bank')->with('flash_message', 'Blood_bank added!');
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
        $blood_bank = Blood_bank::findOrFail($id);

        return view('blood_bank.show', compact('blood_bank'));
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
        $blood_bank = Blood_bank::findOrFail($id);

        return view('blood_bank.edit', compact('blood_bank'));
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
        
        $blood_bank = Blood_bank::findOrFail($id);
        $blood_bank->update($requestData);

        return redirect('blood_bank')->with('flash_message', 'Blood_bank updated!');
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
        Blood_bank::destroy($id);

        return redirect('blood_bank')->with('flash_message', 'Blood_bank deleted!');
    }

    public function blood_bank_line()
    {
        if(Auth::check()){
            return redirect('blood_bank/create');
        }else{
            return redirect('/login/line?redirectTo=blood_bank/create');
        }
    }
}
