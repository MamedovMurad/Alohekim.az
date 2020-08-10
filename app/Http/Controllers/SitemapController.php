<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SitemapController extends Controller
{
    public function index(){
        $subcategories = DB::table('subcategories')->where('status',1)->where('Deleted_at',null)->get();
        $firms = DB::table('firms')->where('status',1)->where('deleted_at',null)->get();
        $products = DB::table('products')->where('status',1)->where('deleted_at',null)->get();

        return response()->view('front.sitemap',['subcategories'=>$subcategories,'firms'=>$firms,
        'products'=>$products])->header('Content-Type','txt/xml');
    }
}