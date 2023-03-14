<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $section1=Blog::where('status','1')->inRandomOrder()->limit(2)->get();

        $section2=Blog::where('status','1')->inRandomOrder()->limit(1)->get();

        $hottopic=Blog::where('status','1')->inRandomOrder()->limit(18)->paginate(6);

        $mostRead=Blog::where('status','1')->inRandomOrder()->limit(4)->get();
 

        return view('frontend.index',compact('section1','hottopic','mostRead','section2'));
    }
}
