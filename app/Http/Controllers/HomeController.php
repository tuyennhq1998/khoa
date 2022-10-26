<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Mail;

class HomeController extends BaseController
{
    public function index()
    {
        $products = DB::table('products')->where('showhome', 'on')->limit(6)->get();
        $title = DB::table('contents')->whereIn('key-title', ['t11','t12','t21','t22','t31','t32','t41','t42','t0'])->get();
        return view('frontend.index', ['products'=>$products, 'title' => $title]);
    }
    public function services() 
    {
        $title = DB::table('contents')->whereIn('key-title', ['t11','t12','t21','t22','t31','t32','t41','t42','t0'])->get();
        return view('frontend.services', ['title'=>$title]);
    }
    public function products() {
        //Panigate 6 sản phẩm 1 page
        $products = DB::table('products')->where('showhome', 'on')->get();
        return view('frontend.products', ['products' => $products]);
    }
    public function blog() {
        return view('frontend.blog');
    }
    public function contacts() {
        return view('frontend.contacts');
    }
    public function productDetail($slug) {
        $product = DB::table('products')->where('id', $slug)->first();
        return view('frontend.product-detail', ['product'=>$product]);
    }
    public function sendMail(Request $request)
    {
        Mail::send([], [], function ($m) {
            $m->from('nguyenhuynh.quynhtuyen@gmail.com');
 
            $m->to('nguyenxminhkhoa@gmail.com')->subject('Con cặt!');
        });
    }
}
