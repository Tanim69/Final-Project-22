<?php

namespace App\Http\Controllers\Backend;
use App\Models\House;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function list(){
        $houses=house::all();
        return view('backend.pages.house-info.house', compact('houses'));

    }



    public function create(Request $request)
    {
        // dd('fhbdhbv');
        // dd($request->all());
        //insert into house table
          $filename = "";
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }
                    // dd( $filename);
        House::create([
            'id'=>$request->id,
            'name'=>$request->name,
             'address'=>$request->address,
            'email'=>$request->email,
             'image'=>$filename

        ]);
        return redirect()->back();


    }

    public function dashboard()
    {
        return view('backend.pages.dashboard.home');
    }

}
