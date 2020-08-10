<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Conference;
use App\Models\P_SubCategory;
use App\Models\Picture;
use App\Models\ServiceContent;
use App\Models\Contact;
use App\Models\Qeydiyyat;

class DashboardController extends Controller
{

    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }


    public function index()
    {
        
        $data['clinics_count'] = Conference::where('status',1)->count();
        $data['department_count'] = P_SubCategory::where('status',1)->count();
        $data['doctors_count'] = Picture::where('status',1)->count();
        $data['news_count'] = ServiceContent::where('status',1)->count();
        return view('back.home',$data);
    }

}
