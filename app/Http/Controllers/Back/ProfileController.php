<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class ProfileController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }

    public function Getir(){
        $user = User::find(1);

        return view('back.profile.profile',compact('user'));
    }

    public function RedakteEt(Request $request){
        $profile = User::find(1);
        $profile->name = $request->AdSoyad;
        $profile->email = $request->email;
        $profile->password =bcrypt($request->password);
        $profile->save();
        return redirect()->back();

    }
}
