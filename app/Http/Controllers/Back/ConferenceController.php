<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\Contact;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Qeydiyyat;

class ConferenceController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $conferences = Conference::orderBy('created_at','DESC')->get();
        return view('back.clinics.index',compact('conferences'));
    }
    
    public function ElaveEt(Request $request){
        $conferences = new Conference;
        $conferences->title = $request->title;
        $conferences->description = $request->description;
        $conferences->title_en = $request->title_en;
        $conferences->description_en = $request->description_en;
        $conferences->title_ru = $request->title_ru;
        $conferences->description_ru = $request->description_ru;
        $conferences->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/clinics'),$imageName);
            $conferences->image = 'uploads/clinics/'.$imageName;
        }
        $conferences->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Əlavə edildi');
        return redirect()->back();

    }
    
    public function RedakteGetir($id){
        $clinics = Conference::findOrFail($id);
        return view('back.clinics.update',compact('clinics'));
     }

     public function RedakteEt(Request $request,$id){
        $conference = Conference::findOrFail($id);
        $conference->title = $request->title;
        $conference->description = $request->description;
        $conference->title_en = $request->title_en;
        $conference->description_en = $request->description_en;
        $conference->title_ru = $request->title_ru;
        $conference->description_ru = $request->description_ru;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/clinics'),$imageName);
            $conference->image = 'uploads/clinics/'.$imageName;
        }
        $conference->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->route('admin.conference');
    }

    public function Sil($id){
        Conference::find($id)->delete();
        toastr()->warning('Əməliyyat yerine yetirildi','Səbətə göndərildi');
        return redirect()->back();
    }

    public function Silinenler(){
        $conferences = Conference::onlyTrashed()->orderBy('Deleted_at','DESC')->get();
        return view('back.clinics.trashed',compact('conferences'));
    }

    public function Recover($id){
        Conference::onlyTrashed()->find($id)->restore();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Geri qaytarıldı');
        return redirect()->back();
    }

    public function HardDelete($id){
        Conference::onlyTrashed()->find($id)->forceDelete();
        toastr()->error('Əməliyyat yerine yetirildi','silindi');
       return redirect()->back();
    }

    public function Status(Request $request){
       $conferences = Conference::findOrFail($request->id);
       $conferences->status= $request->status=="true" ? 1 : 0;
       $conferences->save();
    }

}
