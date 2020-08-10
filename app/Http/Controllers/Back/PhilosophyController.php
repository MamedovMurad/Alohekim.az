<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Philosophy;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class PhilosophyController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $philosophy = Philosophy::find(1);
        return view('back.philosophy.index',compact('philosophy'));
    }

    public function RedakteEt(Request $request){
        $philosophy = Philosophy::find(1);
        $philosophy->title = $request->Basliq;
        $philosophy->content = $request->mezmun;
        $philosophy->title_en = $request->Basliq_en;
        $philosophy->content_en = $request->mezmun_en;
        $philosophy->title_ru = $request->Basliq_ru;
        $philosophy->content_ru = $request->mezmun_ru;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->Basliq).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/philosophy'),$imageName);
            $philosophy->image = 'uploads/philosophy/'.$imageName;
        }
        $philosophy->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->back();

    }
}
