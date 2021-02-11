<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Tedavi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting(){
        return Setting::first();
    }
    public function index(){
        $setting = Setting::first();
        $slider = Tedavi::select('id','title','image','price')->limit(6)->get();
        $last=Tedavi::where('status','True')->limit(6)->orderByDesc('id')->get();
        $picked=Tedavi::where('status','True')->limit(10)->inRandomOrder()->get();
        #print_r($slider);
        #exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'last'=>$last,
            'picked'=>$picked,
        ];
        return view('home.index',$data);
    }
    public function gettedavi(Request $request){
        $search=$request->input('search');
        $count = Tedavi::where('title','like','%'.$search.'%')->get()->count();
        if($count==1){
            $data = Tedavi::where('title','like','%'.$search.'%')->first();
            return redirect()->route('tedavi',['id'=>$data->id]);
        }
        else{
            return redirect()->route('tedavilist',['search'=>$search]);
        }
    }
    public function tedavilist($search){
        $datalist = Tedavi::where('title','like','%'.$search.'%')->get();
        return view('home.search_tedavis',['search'=>$search,'datalist'=>$datalist]);
    }
    public function tedavi($id){
        $data = Tedavi::find($id);
        $datalist = Image::where('tedavi_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.tedavi_detail',['data'=>$data,'datalist'=>$datalist]);
    }
    public function categoryservices($id){
        $datalist = Tedavi::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_services', ['data'=>$data,'datalist'=>$datalist]);
    }
    public function aboutus(){
        $setting = Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir. Teşekkür ederiz.');
    }
    public function faq(){
        $datalist = Faq::all()->sortBy('id');
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){
        if ($request->isMethod('post')) {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records.'
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
