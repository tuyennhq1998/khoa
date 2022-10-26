<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard() {
        return view('backend.dashboard');
    }
    public function home() {
        return view('backend.home');
    }
    public function categories() {
        return view('backend.dashboard');
    }
    public function products() {
        $products = DB::table('products')->get();
        return view('backend.products', ['products' => $products]);
    }
    public function editService()
    {
        $title = DB::table('contents')->whereIn('key-title', ['t11','t12','t21','t22','t31','t32','t41','t42','t0'])->get();
        return view('backend.editservices', ['title' => $title]);
    }
    public function postHomeBanner(Request $request){
        $request = $request->all();
        DB::table('contents')->insert([
            'key-title' => 'title-banner',
            'value' => $request['banner']
        ]);
        return redirect()->route('home');
    }
    public function postHomeAbout(Request $request){
        $request = $request->all();
        DB::table('contents')->insert([
            'key-title' => 'title-about',
            'value' => $request['chungtoicungcap']
        ]);
        return redirect()->route('home');
    }
    public function addProducts()
    {
        return view('backend.add-product');
    }
    public function postAddProducts(Request $request) {
        $data= $request->all();
        if (isset($data['imagethumb']))
        {
            $file = $request->imagethumb;
            $randomt = Str::random(40).'.'.$request->file('imagethumb')->extension();;
            $file->move('hinhanh',$randomt);
        }
        if (isset($data['image1']))
        {
            $file = $request->image1;
            $random1 = Str::random(40).'.'.$request->file('image1')->extension();;
            $file->move('hinhanh',$random1);
        }
        if (isset($data['image2']))
        {
            $file = $request->image2;
            $random2 = Str::random(40).'.'.$request->file('image2')->extension();;
            $file->move('hinhanh',$random2);
        }
        if (isset($data['image3']))
        {
            $file = $request->image3;
            $random3 = Str::random(40).'.'.$request->file('image3')->extension();;
            $file->move('hinhanh',$random3);
        }
        if (isset($data['image4']))
        {
            $file = $request->image4;
            $random4 = Str::random(40).'.'.$request->file('image4')->extension();;
            $file->move('hinhanh',$random4);
        }
        if (isset($data['image5']))
        {
            $file = $request->image5;
            $random5= Str::random(40).'.'.$request->file('image5')->extension();;
            $file->move('hinhanh',$random5);
        }
        if (isset($data['image6']))
        {
            $file = $request->image6;
            $random6 = Str::random(40).'.'.$request->file('image6')->extension();;
            $file->move('hinhanh',$random6);
        }
        if (isset($data['image7']))
        {
            $file = $request->image7;
            $random7 = Str::random(40).'.'.$request->file('image7')->extension();;
            $file->move('hinhanh',$random7);
        }
        if (isset($data['image8']))
        {
            $file = $request->image8;
            $random8 = Str::random(40).'.'.$request->file('image8')->extension();;
            $file->move('hinhanh',$random8);
        }
        if (isset($data['image9']))
        {
            $file = $request->image9;
            $random9 = Str::random(40).'.'.$request->file('image9')->extension();;
            $file->move('hinhanh',$random9);
        }
        if (isset($data['image10']))
        {
            $file = $request->image10;
            $random10 = Str::random(40).'.'.$request->file('image10')->extension();;
            $file->move('hinhanh',$random10);
        }
        
        DB::table('products')->insert([
                'name'=> $data['name'],
                'tenduan'=> $data['tenduan'],
                'dientichdat'	=> $data['dientichdat'],
                'loaiduan'=> $data['loaiduan'],
                'dientichsudung'	=> $data['dichtichsudung'],
                'numberroom'	=> $data['numberroom'],
                'nhawc'	=> $data['nhawc'],
                'year'	=> $data['year'],
                'price'	=> $data['price'],
                'sale_price'	=> isset($data['sale_price']) ?$data['sale_price'] : null,
                'tinh'	=> $data['tinh'],
                'quan'	=> $data['quan'],
                'phuong'	=> $data['phuong'],
                'duong'	=> $data['duong'],
                'imagethumb'	=> isset($data['imagethumb']) ? $randomt : null,
                'image1'	=> isset($data['image1']) ? $random1 : null,
                'image2'	=>  isset($data['image2']) ? $random2 : null,
                'image3'	=> isset($data['image3']) ? $random3 : null,
                'image4'	=> isset($data['image4']) ? $random4 : null,
                'image5'	=> isset($data['image5']) ? $random5 : null,
                'image6'	=> isset($data['image6']) ? $random6 : null,
                'image7'	=> isset($data['image7']) ? $random7 : null,
                'image8'	=> isset($data['image8']) ? $random8 : null,
                'image9'	=> isset($data['image9']) ? $random9 : null,
                'image10'	=> isset($data['image10']) ? $random10 : null,
                'description'	=> isset($data['description']) ?$data['description'] : null,
                'showhome'	=> isset($data['showHome']) ? 'on' : 'off',
            ]);
        
        return redirect()->route('products');

    }
    public function editProducts($id) {
        $product = DB::table('products')->where('id', $id)->first();
        return view('backend.edit-product', ['product'=>$product]);

    }
    public function postEditProducts(Request $request) {
        $data= $request->all();
        $id = $data['id'];
        if (isset($data['imagethumb']))
        {
            $file = $request->imagethumb;
            $randomt = Str::random(40).'.'.$request->file('imagethumb')->extension();;
            $file->move('hinhanh',$randomt);
        }
        if (isset($data['image1']))
        {
            $file = $request->image1;
            $random1 = Str::random(40).'.'.$request->file('image1')->extension();;
            $file->move('hinhanh',$random1);
        }
        if (isset($data['image2']))
        {
            $file = $request->image2;
            $random2 = Str::random(40).'.'.$request->file('image2')->extension();;
            $file->move('hinhanh',$random2);
        }
        if (isset($data['image3']))
        {
            $file = $request->image3;
            $random3 = Str::random(40).'.'.$request->file('image3')->extension();;
            $file->move('hinhanh',$random3);
        }
        if (isset($data['image4']))
        {
            $file = $request->image4;
            $random4 = Str::random(40).'.'.$request->file('image4')->extension();;
            $file->move('hinhanh',$random4);
        }
        if (isset($data['image5']))
        {
            $file = $request->image5;
            $random5= Str::random(40).'.'.$request->file('image5')->extension();;
            $file->move('hinhanh',$random5);
        }
        if (isset($data['image6']))
        {
            $file = $request->image6;
            $random6 = Str::random(40).'.'.$request->file('image6')->extension();;
            $file->move('hinhanh',$random6);
        }
        if (isset($data['image7']))
        {
            $file = $request->image7;
            $random7 = Str::random(40).'.'.$request->file('image7')->extension();;
            $file->move('hinhanh',$random7);
        }
        if (isset($data['image8']))
        {
            $file = $request->image8;
            $random8 = Str::random(40).'.'.$request->file('image8')->extension();;
            $file->move('hinhanh',$random8);
        }
        if (isset($data['image9']))
        {
            $file = $request->image9;
            $random9 = Str::random(40).'.'.$request->file('image9')->extension();;
            $file->move('hinhanh',$random9);
        }
        if (isset($data['image10']))
        {
            $file = $request->image10;
            $random10 = Str::random(40).'.'.$request->file('image10')->extension();;
            $file->move('hinhanh',$random10);
        }
        
        DB::table('products')->where('id', $id)->update([
                'name'=> $data['name'],
                'tenduan'=> $data['tenduan'],
                'dientichdat'	=> $data['dientichdat'],
                'loaiduan'=> $data['loaiduan'],
                'dientichsudung'	=> $data['dichtichsudung'],
                'numberroom'	=> $data['numberroom'],
                'nhawc'	=> $data['nhawc'],
                'year'	=> $data['year'],
                'price'	=> $data['price'],
                'sale_price'	=> isset($data['sale_price']) ?$data['sale_price'] : null,
                'tinh'	=> $data['tinh'],
                'quan'	=> $data['quan'],
                'phuong'	=> $data['phuong'],
                'duong'	=> $data['duong'],
                'imagethumb'	=> isset($data['imagethumb']) ? $randomt : null,
                'image1'	=> isset($data['image1']) ? $random1 : null,
                'image2'	=>  isset($data['image2']) ? $random2 : null,
                'image3'	=> isset($data['image3']) ? $random3 : null,
                'image4'	=> isset($data['image4']) ? $random4 : null,
                'image5'	=> isset($data['image5']) ? $random5 : null,
                'image6'	=> isset($data['image6']) ? $random6 : null,
                'image7'	=> isset($data['image7']) ? $random7 : null,
                'image8'	=> isset($data['image8']) ? $random8 : null,
                'image9'	=> isset($data['image9']) ? $random9 : null,
                'image10'	=> isset($data['image10']) ? $random10 : null,
                'description'	=> isset($data['description']) ?$data['description'] : null,
                'showhome'	=> isset($data['showHome']) ? 'on' : 'off',
            ]);
        
        return redirect()->route('products');

    }
    public function home_server_content(Request $request)
    {
        if (isset($request->t0))
        {
            $data5= DB::table('contents')->where('key-title', 't0')->first();
            if ($data5== null)
            {
                DB::table('contents')->insert([
                    'key-title' => 't0',
                    'value' => $request->t0
                ]);
            }
            else
            {
                DB::table('contents')->where('key-title', 't0')->update([
                    'value'=>$request->t0
                ]);
            }
            return redirect()->route('service');

        }
        $data11 = DB::table('contents')->where('key-title', 't11')->first();
        if ($data11 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't11',
                'value' => $request->t11
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't11')->update([
                'value'=>$request->t11
            ]);
        }
        $data12 = DB::table('contents')->where('key-title', 't12')->first();
        if ($data12 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't12',
                'value' => $request->t12
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't12')->update([
                'value'=>$request->t12
            ]);
        }
        $data21 = DB::table('contents')->where('key-title', 't21')->first();
        if ($data21 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't21',
                'value' => $request->t21
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't21')->update([
                'value'=>$request->t21
            ]);
        }
        $data22= DB::table('contents')->where('key-title', 't22')->first();
        if ($data22== null)
        {
            DB::table('contents')->insert([
                'key-title' => 't22',
                'value' => $request->t22
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't22')->update([
                'value'=>$request->t22
            ]);
        }
        $data31 = DB::table('contents')->where('key-title', 't31')->first();
        if ($data31 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't31',
                'value' => $request->t31
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't31')->update([
                'value'=>$request->t31
            ]);
        }
        $data32 = DB::table('contents')->where('key-title', 't32')->first();
        if ($data32 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't32',
                'value' => $request->t32
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't32')->update([
                'value'=>$request->t32
            ]);
        }
        $data41 = DB::table('contents')->where('key-title', 't41')->first();
        if ($data41 == null)
        {
            DB::table('contents')->insert([
                'key-title' => 't41',
                'value' => $request->t41
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't41')->update([
                'value'=>$request->t41
            ]);
        }
        $data42 = DB::table('contents')->where('key-title', 't42')->first();
        if ($data42== null)
        {
            DB::table('contents')->insert([
                'key-title' => 't42',
                'value' => $request->t42
            ]);
        }
        else
        {
            DB::table('contents')->where('key-title', 't42')->update([
                'value'=>$request->t42
            ]);
        }
        return redirect()->route('service');

    }
}
