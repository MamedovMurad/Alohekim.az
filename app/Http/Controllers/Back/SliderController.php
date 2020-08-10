<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class SliderController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $sliders = Slider::orderBy('id','ASC')->get();
        return view('back.reklamlar.index',compact('sliders'));
    }

    


     public function RedakteGetir($id){
        $slider = Slider::findOrFail($id);

        if($slider->id == 1 or $slider->id == 3 or $slider->id == 4 ){
        return view('back.reklamlar.update1',compact('slider'));
        }

        if($slider->id == 2 or $slider->id == 5 or $slider->id == 6 or $slider->id ==7 ){
            return view('back.reklamlar.update2',compact('slider'));
            }


        }

     public function RedakteEt(Request $request,$id){
        $slider = Slider::findOrFail($id);
        
        $slider->text1 = $request->mezmun1;
        $slider->text2 = $request->mezmun2;
        $slider->text3 = $request->mezmun3;
        $slider->text1_en = $request->mezmun1_en;
        $slider->text2_en = $request->mezmun2_en;
        $slider->text3_en = $request->mezmun3_en;
        $slider->text1_ru = $request->mezmun1_ru;
        $slider->text2_ru = $request->mezmun2_ru;
        $slider->text3_ru = $request->mezmun3_ru;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/slide'),$imageName);
            $slider->image = 'uploads/slide/'.$imageName;
        }
        $slider->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->route('admin.slider');
    }





}
