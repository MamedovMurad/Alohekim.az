<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;
use App\Models\P_SubCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class PictureController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $pictures = Picture::orderBy('created_at','DESC')->get();
        $subcategories = P_SubCategory::orderBy('sira','ASC')->get();
        return view('back.doctors.index',compact('pictures','subcategories'));
    }
    
    public function ElaveEt(Request $request){
        $pictures = new Picture;
        $pictures->subcategory_id=$request->subcategory;
        $pictures->name_surname=$request->name_surname;
        $pictures->name_surname_en=$request->name_surname_en;
        $pictures->name_surname_ru=$request->name_surname_ru;
        $pictures->address=$request->address;
        $pictures->address_en=$request->address_en;
        $pictures->address_ru=$request->address_ru;
        $pictures->phone=$request->phone;
        $pictures->email=$request->email;
        $pictures->degree=$request->degree;
        $pictures->degree_en=$request->degree_en;
        $pictures->degree_ru=$request->degree_ru;
        $pictures->facebook=$request->facebook;
        $pictures->instagram=$request->instagram;
        $pictures->content=$request->content;
        $pictures->content_en=$request->content_en;
        $pictures->content_ru=$request->content_ru;
        $pictures->slug = Str::slug($request->name_surname);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/doctors'),$imageName);
            $pictures->image = 'uploads/doctors/'.$imageName;
        }
        $pictures->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Əlavə edildi');
        return redirect()->back();

    }
    
    public function RedakteGetir($id){
        $pictures = Picture::findOrFail($id);
        $departments = P_SubCategory::orderBy('sira','ASC')->get();
        return view('back.doctors.update',compact('pictures','departments'));
     }

     public function RedakteEt(Request $request,$id){
        $pictures = Picture::findOrFail($id);
        $pictures->subcategory_id=$request->subcategory;
        $pictures->name_surname=$request->name_surname;
        $pictures->name_surname_en=$request->name_surname_en;
        $pictures->name_surname_ru=$request->name_surname_ru;
        $pictures->address=$request->address;
        $pictures->address_en=$request->address_en;
        $pictures->address_ru=$request->address_ru;
        $pictures->phone=$request->phone;
        $pictures->email=$request->email;
        $pictures->degree=$request->degree;
        $pictures->degree_en=$request->degree_en;
        $pictures->degree_ru=$request->degree_ru;
        $pictures->facebook=$request->facebook;
        $pictures->instagram=$request->instagram;
        $pictures->content=$request->content;
        $pictures->content_en=$request->content_en;
        $pictures->content_ru=$request->content_ru;
        $pictures->slug = Str::slug($request->name_surname);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/doctors'),$imageName);
            $pictures->image = 'uploads/doctors/'.$imageName;
        }
        $pictures->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->route('admin.picture');
    }

    public function Sil($id){
        Picture::find($id)->delete();
        toastr()->warning('Əməliyyat uğurla yerine yetirildi','Səbətə göndərildi');
        return redirect()->back();
    }

    public function Silinenler(){
        $pictures = Picture::onlyTrashed()->orderBy('Deleted_at','DESC')->get();
        return view('back.doctors.trashed',compact('pictures'));
    }

    public function Recover($id){
        Picture::onlyTrashed()->find($id)->restore();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Geri qaytarıldı');
        return redirect()->back();
    }

    public function HardDelete($id){
        Picture::onlyTrashed()->find($id)->forceDelete();
        toastr()->error('Əməliyyat uğurla yerine yetirildi','Silindi');
       return redirect()->back();
    }

    public function Status(Request $request){
       $pictures = Picture::findOrFail($request->id);
       $pictures->status= $request->status=="true" ? 1 : 0;
       $pictures->save();
    }

}
