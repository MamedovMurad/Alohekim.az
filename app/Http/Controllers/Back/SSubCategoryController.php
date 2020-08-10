<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\S_Categories;
use App\Models\S_SubCategories;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class SSubCategoryController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $data['subcategories'] = S_SubCategories::orderBy('sira','DESC')->get();
        return view('back.service-subcategory.index',$data);
    }

    
    public function ElaveEt(Request $request){
        $subcategories = new S_SubCategories;
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
        $redakteGetir = S_SubCategories::findOrFail($request->id);
        return response()->json($redakteGetir);
     }

     public function RedakteEt(Request $request){
        $subcategories = S_SubCategories::find($request->id);
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
        S_SubCategories::find($id)->delete();
        toastr()->warning('Əməliyyat uğurla yerine yetirildi','Zibil qutusuna göndərildi');
        return redirect()->back();
    }

    public function Silinenler(){
        $subcategories = S_SubCategories::onlyTrashed()->orderBy('Deleted_at','DESC')->get();
        return view('back.service-subcategory.trashed',compact('subcategories'));
    }

    public function Recover($id){
        S_SubCategories::onlyTrashed()->find($id)->restore();
        
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Geri qaytarıldı');
        return redirect()->back();
    }

    public function HardDelete($id){
        S_SubCategories::onlyTrashed()->find($id)->forceDelete();
        toastr()->error('Əməliyyat uğurla yerine yetirildi','Silindi');
       return redirect()->back();
    }

    public function Status(Request $request){
       $subcategories = S_SubCategories::findOrFail($request->id);
       $subcategories->status= $request->status=="true" ? 1 : 0;
       $subcategories->save();
    }

}
