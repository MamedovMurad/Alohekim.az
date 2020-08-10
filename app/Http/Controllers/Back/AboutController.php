<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\About;
use App\Models\Qeydiyyat;

class AboutController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $about = About::find(1);
        return view('back.haqqinda.index',compact('about'));
    }

    public function RedakteEt(Request $request){
        $about = About::find(1);
        $about->Basliq = $request->Basliq;
        $about->mezmun = $request->mezmun;
        $about->Basliq_en = $request->Basliq_en;
        $about->mezmun_en = $request->mezmun_en;
        $about->Basliq_ru = $request->Basliq_ru;
        $about->mezmun_ru = $request->mezmun_ru;
        $about->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->back();

    }
}
