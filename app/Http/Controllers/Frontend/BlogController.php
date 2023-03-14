<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function viewCategoryPosts($category_slug)
    {

        $categories = Category::where('status', '1')
            ->whereHas('blogs', function ($query) {
                $query->where('status', '1');
            })->get();

        $category = Category::where('slug', $category_slug)->first();

        if ($category) {
            $blogs = Blog::where('category_id', $category->id)->where('status', '1')->paginate(5);

            $title = Category::where('id', $category->id)->value('name');

            $latest = Blog::where('status', '1')->orderBy('updated_at', 'desc')->limit(4)->get();

            return view('frontend.blog', compact('blogs', 'title', 'latest', 'categories'));
        } else {
            return redirect('/');
        }
    }


    public function viewArticle($category_slug, $blog_slug)
    {
        $categories = Category::where('status', '1')
            ->whereHas('blogs', function ($query) {
                $query->where('status', '1');
            })->get();

        $category = Category::where('slug', $category_slug)->first();

        if ($category) {

            $blog = Blog::where('category_id', $category->id)->where('slug', $blog_slug)->where('status', '1')->first();

            $liked = Blog::where('status', '1')->where('category_id', $category->id)->inRandomOrder()->limit(3)->get();

            $title = Blog::where('status', '1')->where('id', $blog->id)->value('title');

            return view('frontend.singlepage', compact('blog', 'title', 'liked', 'categories'));
        } else {
            return redirect('/');
        }
    }
}
