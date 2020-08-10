<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Nizam;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class NizamController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }

    public function UmumiGetir(){
        $nizam = Nizam::find(1);
        return view('back.nizam.umumi',compact('nizam'));
    }

    public function ElaqeGetir(){
        $nizam = Nizam::find(1);
        return view('back.nizam.elaqe',compact('nizam'));
    }

    public function SosialGetir(){
        $nizam = Nizam::find(1);
        return view('back.nizam.sosial',compact('nizam'));
    }

    public function RedakteEt(Request $request){
        $nizam = Nizam::find(1);

        if($request->nizam =="umumi"){
            $nizam->title = $request->title;
            $nizam->description = $request->description;
            $nizam->keywords = $request->keywords;

            if($request->hasFile('logo')) {
                $imageName = Str::slug($request->logo->getClientOriginalName()).'.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('uploads'),$imageName);
                $nizam->logo = 'uploads/'.$imageName;
            } 
            if($request->hasFile('favicon')){
                $imageName = Str::slug($request->favicon->getClientOriginalName()).'.'.$request->favicon->getClientOriginalExtension();
                $request->favicon->move(public_path('uploads'),$imageName);
                $nizam->favicon = 'uploads/'.$imageName;
            }
            if($request->hasFile('robot_txt')){
                $txtName = 'robots.txt';
                $request->robot_txt->move(public_path('/'),$imageName);
                $nizam->robot_txt = '/'.$txtName;
            }
        }

        if($request->nizam =="elaqe"){
            $nizam->address = $request->address;
            $nizam->mobile = $request->mobile;
            $nizam->email = $request->email;
        }

        if($request->nizam =="sosial"){
            $nizam->facebook = $request->facebook;
            $nizam->instagram = $request->instagram;
            $nizam->youtube = $request->youtube;
        }

        $nizam->save();
        toastr()->success('Success', 'Uğurla yeniləndi');
        return redirect()->back();

    }

}
