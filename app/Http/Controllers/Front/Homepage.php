<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Nizam;
use App\Models\About;
use App\Models\S_SubCategories;
use App\Models\ServiceContent;
use App\Models\Picture;
use App\Models\P_SubCategory;
use App\Models\Conference;
use App\Models\Slider;
use App\Models\Qeydiyyat;

class Homepage extends Controller
{


    public function __construct(){
        view()->share('nizam',Nizam::find(1));
        view()->share('xeberkateqoriya',S_SubCategories::where('status',1)->orderBy('sira','ASC')->get());
        view()->share('xeberfooter',ServiceContent::where('status',1)->orderBy('created_at','DESC')->take(2)->get());
        view()->share('dcategory',P_SubCategory::where('status',1)->orderBy('sira','ASC')->get());
        
    }

    public function index(){
        $data['about'] = About::find(1);
        $data['reklam1'] = Slider::find(1);
        $data['reklam2'] = Slider::find(2);
        $data['reklam3'] = Slider::find(3);
        $data['reklam4'] = Slider::find(4);
        $data['reklam5'] = Slider::find(5);
        $data['reklam6'] = Slider::find(6);
        $data['reklam7'] = Slider::find(7);
        $data['xeberler'] = ServiceContent::where('status',1)->orderBy('created_at','DESC')->take(3)->get();
        $data['clinics'] = Conference::where('status',1)->orderBy('created_at','DESC')->get();
        $data['depart_doctors'] = Picture::where('status',1)->orderBy('created_at','DESC')->get();

        $data['clinics_count'] = Conference::where('status',1)->count();
        $data['department_count'] = P_SubCategory::where('status',1)->count();
        $data['doctors_count'] = Picture::where('status',1)->count();
        $data['news_count'] = ServiceContent::where('status',1)->count();
        return view('front.index',$data);

    }

    public function Clinics(){
        $clinics = Conference::where('status',1)->orderBy('created_at','DESC')->paginate(20);
        return view('front.clinic',compact('clinics'));
       }  
       
    public function ClinicSingle($slug){
        $clinic=Conference::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.'); 

        return view('front.clinic-single',compact('clinic'));
       }   
        

    public function Doctors(){
        $depart_doctors = Picture::where('status',1)->orderBy('created_at','DESC')->get();
        return view('front.doctors',compact('depart_doctors'));
       }

    public function Departments($slug){
        $depcategory=P_SubCategory::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.'); 
        $depart_doctors = Picture::where('subcategory_id',$depcategory->id)->where('status',1)->orderBy('created_at','DESC')->get();
        return view('front.departments',compact('depart_doctors','depcategory'));
       }

    public function DoctorSingle($slug){
        $doctor=Picture::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.'); 

        return view('front.doctor-single',compact('doctor'));
       }

    public function News($slug){
        $x_category = S_SubCategories::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.');
        $xeberler = ServiceContent::where('subcategory_id',$x_category->id)->where('status',1)->orderBy('created_at','DESC')->paginate(12);
    
        return view('front.news',compact('xeberler','x_category'));
       }

    public function NewsSingle($category,$slug){
        $news_cat = S_SubCategories::whereSlug($category)->first() ?? abort(403,'Səhifə Tapılmadı.');
        $news_category = ServiceContent::where('subcategory_id',$news_cat->id)->where('status',1)->orderBy('created_at','DESC')->take(5)->get();
        $news_single=ServiceContent::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.');
        return view('front.news-single',compact('news_single','news_category'));
    }   

       
    public function About(){
        $about = About::find(1);
        return view('front.about',compact('about'));
   }

   
   public function Contact(){
       return view('front.contact');
   }

   public function contactMessage(Request $request){
    $contact = new Contact;
    $contact->name = $request->ad;
    $contact->surname = $request->soyad;
    $contact->email = $request->email;
    $contact->mobile = $request->tel;
    $contact->message = $request->message;
    $contact->save();

    return redirect()->back()->with('success','Mesajınız göndərildi');

}

public function Qeydiyyat(){
    return view('front.qeydiyyat');
}

public function QeydiyyatPost(Request $request){
    $qeydiyyat = new Qeydiyyat;
    $qeydiyyat->name = $request->ad;
    $qeydiyyat->surname = $request->soyad;
    $qeydiyyat->email = $request->email;
    $qeydiyyat->mobile = $request->tel;
    $qeydiyyat->position = $request->vezife;
    $qeydiyyat->message = $request->message;
    $qeydiyyat->save();

    return redirect()->back()->with('success','Qeydiyyatdan Uğurla Keçdiniz');

}



  

}


/*
use App\Models\Reyler;

use App\Models\Video;
use App\Models\P_Categories;


class Homepage extends Controller
{

   public function __construct(){
    view()->share('nizam',Nizam::find(1));
    view()->share('services',ServiceContent::where('status',1)->orderBy('created_at','DESC')->get());
    view()->share('scategories',S_Categories::where('status',1)->orderBy('sira','ASC')->get());
   
    view()->share('pcategories',P_Categories::where('status',1)->orderBy('sira','ASC')->get());

   }

   public function index(){
       $about = About::find(1);
       $sliders = Slider::where('status',1)->orderBy('created_at','DESC')->get();
       $pictures = Picture::where('status',1)->orderBy('created_at','DESC')->take(6)->get();
       $service_index = ServiceContent::where('status',1)->orderBy('created_at','DESC')->take(9)->get();
       return view('front.index',compact('sliders','about','pictures','service_index'));
   }  

   
   

   public function Conference(){
    $conferences = Conference::where('status',1)->orderBy('created_at','DESC')->get();
    return view('front.conference',compact('conferences'));
   }

   public function Video(){
    $videos = Video::where('status',1)->orderBy('created_at','DESC')->get();
    return view('front.videos',compact('videos'));
   }

   public function Service($slug){
    $serv = ServiceContent::whereSlug($slug)->first() ?? abort(403,'Səhifə Tapılmadı.');

    return view('front.service',compact('serv'));
   }

   public function Contact(){
    return view('front.contact');
   }

   public function Comment(){
    $rey = Reyler::where('status',1)->orderBy('created_at','ASC')->get();
    return view('front.comments',compact('rey'));
   }



public function CommentPost(Request $request){
    $comment = new Reyler;
    $comment->name = $request->ad;
    $comment->surname = $request->soyad;
    $comment->message = $request->mesaj;
    $comment->save();

    return redirect()->back()->with('success','Rəyiniz göndərildi');

}
     
*/



