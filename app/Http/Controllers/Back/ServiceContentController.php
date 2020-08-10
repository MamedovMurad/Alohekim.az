<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\ServiceContent;
use App\Models\S_SubCategories;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class ServiceContentController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function Getir(){
        $service_contents = ServiceContent::all();
        $subcategories = S_SubCategories::orderBy('sira','ASC')->get();
        return view('back.service-content.index',compact('service_contents','categories','subcategories'));
    }

    
    public function ElaveEt(Request $request){
        $service_contents = new ServiceContent;
        $service_contents->subcategory_id=$request->subcategory;
        $service_contents->title = $request->basliq;
        $service_contents->title_en = $request->basliq_en;
        $service_contents->title_ru = $request->basliq_ru;
        $service_contents->content = $request->mezmun;
        $service_contents->content_en = $request->mezmun_en;
        $service_contents->content_ru = $request->mezmun_ru;
        $service_contents->slug = Str::slug($request->basliq);
        $service_contents->slug_en = Str::slug($request->basliq_en);
        $service_contents->slug_ru = Str::slug($request->basliq_ru);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/saglamliq'),$imageName);
            $service_contents->image = 'uploads/saglamliq/'.$imageName;
        }
        $service_contents->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Xəbər əlavə edildi');
        return redirect()->back();

    }

     public function RedakteGetir($id){
        $service_content = ServiceContent::findOrFail($id);
        $subcategories = S_SubCategories::orderBy('sira','ASC')->get();
        return view('back.service-content.update',compact('service_content','subcategories'));
     }

     public function RedakteEt(Request $request,$id){
        $service_content = ServiceContent::findOrFail($id);
        $service_content->subcategory_id=$request->subcategory;
        $service_content->title = $request->basliq;
        $service_content->title_en = $request->basliq_en;
        $service_content->title_ru = $request->basliq_ru;
        $service_content->content = $request->mezmun;
        $service_content->content_en = $request->mezmun_en;
        $service_content->content_ru = $request->mezmun_ru;
        $service_content->slug = Str::slug($request->basliq);
        $service_content->slug_en = Str::slug($request->basliq_en);
        $service_content->slug_ru = Str::slug($request->basliq_ru);
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->image->getClientOriginalName()).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/saglamliq'),$imageName);
            $service_content->image = 'uploads/saglamliq/'.$imageName;
        }
        $service_content->save();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Xəbər redaktə edildi');
        return redirect()->route('admin.serviceContent');
    }

    public function Sil($id){
        ServiceContent::find($id)->delete();
        toastr()->warning('Əməliyyat uğurla yerine yetirildi','Slider zibil qutusuna göndərildi');
        return redirect()->back();
    }

    public function Silinenler(){
        $service_contents = ServiceContent::onlyTrashed()->orderBy('Deleted_at','DESC')->get();
        return view('back.service-content.trashed',compact('service_contents'));
    }

    public function Recover($id){
        ServiceContent::onlyTrashed()->find($id)->restore();
        toastr()->success('Əməliyyat uğurla yerine yetirildi','Xəbər geri qaytarıldı');
        return redirect()->back();
    }

    public function HardDelete($id){
        ServiceContent::onlyTrashed()->find($id)->forceDelete();
        toastr()->error('Əməliyyat uğurla yerine yetirildi','Xəbər silindi');
       return redirect()->back();
    }

    public function Status(Request $request){
       $service_contents = ServiceContent::findOrFail($request->id);
       $service_contents->status= $request->status=="true" ? 1 : 0;
       $service_contents->save();
    }

}
