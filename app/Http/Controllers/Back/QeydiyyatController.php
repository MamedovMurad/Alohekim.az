<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qeydiyyat;
use App\Models\Contact;
use Illuminate\Support\Str;
class QeydiyyatController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function index(){
        $qeydiyyat = Qeydiyyat::orderBy('created_at','DESC')->get();
        return view('back.qeydiyyatlar.index',compact('qeydiyyat'));
    }

    public function Single($id){
        $qeydiyyat = Qeydiyyat::findOrFail($id);
        $qeydiyyat->increment('hit');
        return view('back.qeydiyyatlar.single',compact('qeydiyyat'));
    }

    public function HardDelete($id){
        Qeydiyyat::find($id)->delete();
        
        return redirect()->back();
    }
}
