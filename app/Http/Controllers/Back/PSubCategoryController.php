<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\P_SubCategory;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class PSubCategoryController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $data['subcategories'] = P_SubCategory::orderBy('sira','DESC')->get();
        return view('back.departments.index',$data);
    }

    
    public function ElaveEt(Request $request){
        $subcategories = new P_SubCategory;
        $subcategories->basliq=$request->title;
        $subcategories->basliq_en=$request->title_en;
        $subcategories->basliq_ru=$request->title_ru;
        $subcategories->sira=$request->sira;
        $subcategories->slug=Str::slug($request->title);
        $subcategories->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Əlavə edildi');
        return redirect()->back();

    }
    
    public function RedakteGetir(Request $request){
        $redakteGetir = P_SubCategory::findOrFail($request->id);
        return response()->json($redakteGetir);
     }

     public function RedakteEt(Request $request){
        $subcategories = P_SubCategory::find($request->id);
        $subcategories->basliq=$request->title;
        $subcategories->basliq_en=$request->title_en;
        $subcategories->basliq_ru=$request->title_ru;
        $subcategories->sira=$request->sira;
        $subcategories->slug=Str::slug($request->title);
        $subcategories->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Redaktə edildi');
        return redirect()->back();
    }

    public function Sil($id){
        P_SubCategory::find($id)->delete();
        toastr()->warning('Əməliyyat uğurla yerine yetirildi','Zibil qutusuna göndərildi');
        return redirect()->back();
    }

    public function Silinenler(){
        $subcategories = P_SubCategory::onlyTrashed()->orderBy('Deleted_at','DESC')->get();
        return view('back.departments.trashed',compact('subcategories'));
    }

    public function Recover($id){
        P_SubCategory::onlyTrashed()->find($id)->restore();
        
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Geri qaytarıldı');
        return redirect()->back();
    }

    public function HardDelete($id){
        P_SubCategory::onlyTrashed()->find($id)->forceDelete();
        toastr()->error('Əməliyyat uğurla yerine yetirildi','Silindi');
       return redirect()->back();
    }

    public function Status(Request $request){
       $subcategories = P_SubCategory::findOrFail($request->id);
       $subcategories->status= $request->status=="true" ? 1 : 0;
       $subcategories->save();
    }

}
