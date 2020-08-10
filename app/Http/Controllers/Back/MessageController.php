<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Str;
use App\Models\Qeydiyyat;

class MessageController extends Controller
{
    public function __construct()
    {
        view()->share('messages_count',Contact::where('hit',0)->count());
        view()->share('qeydiyyat_count',Qeydiyyat::where('hit',0)->count());
    }
    
    public function index(){
        $messages = Contact::orderBy('created_at','DESC')->get();
        return view('back.mesajlar.messages',compact('messages'));
    }

    public function Single($id){
        $message = Contact::findOrFail($id);
        $message->increment('hit');
        return view('back.mesajlar.single',compact('message'));
    }

    public function HardDelete($id){
        Contact::find($id)->delete();
        
        return redirect()->back();
    }
}
