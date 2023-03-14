<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $section1=Blog::where('status','1')->inRandomOrder()->limit(2)->get();

        $section2=Blog::where('status','1')->inRandomOrder()->limit(1)->get();

        $hottopic=Blog::where('status','1')->inRandomOrder()->limit(18)->paginate(6);

        $mostRead=Blog::where('status','1')->inRandomOrder()->limit(4)->get();
 

        return view('frontend.index',compact('section1','hottopic','mostRead','section2'));
    }
}
