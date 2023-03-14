<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $req){

        $validator =Validator::make($req->all(),[
            'comment_body'=>'string|required',
            'username'=>'string|required'
        ]);  
        
        if($validator->fails())
        {
            return redirect()->to(url()->previous() . '#comments')->withErrors($validator)->withInput();
        }

        $post=Blog::where('slug',$req->blog_slug)->where('status','1')->first();
        if($post){
            Comment::create([
                'post_id'=>$post->id,
                'username'=>$req->username,
                'comment_body'=>$req->comment_body]);
            
            return redirect()->to(url()->previous() . '#comments')->with('success', "Thank you for your comment!");

        }
        else{
            return redirect()->back();
        }
    }
}
