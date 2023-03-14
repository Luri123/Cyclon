<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request)
   {
      $search =  $request['search'];
      $likeable=Blog::where('status','1')->inRandomOrder()->limit(3)->get();
      if (!empty($search)) {
         $results = Blog::where('status', '1')
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->get();
      } else {
         return view('frontend.search',compact('likeable'))->with('errori', "Please enter a valid search keyword !");
      }


      if (count($results) > 0) {
         return view('frontend.search', compact('results'));
      } else {
         return view('frontend.search',compact('likeable'))->with('message', "No blog found with keyword $search");
      }
   }
}
