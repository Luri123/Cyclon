<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $category = Category::all();
        $authors = Author::all();
        return view('admin.post.create', compact('category','authors'));
    }

    public function view($post_id)
    {
        $post = Blog::find($post_id);
        return view('admin.post.view', compact('post'));
    }

    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Blog;
        $post->category_id = $data['category_id'];
        $post->author_id = $data['author_id'];
        $post->title = $data['title'];
        $post->slug = Str::slug($data['title']);
        $post->description = $data['description'];

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image = $filename;
        }


        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image1 = $filename;
        }

        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image2 = $filename;
        }

        $post->status = $request->has('status');

        $post->save();

        return redirect('admin/posts')->with('message', 'Post added succesfully');
    }

    public function edit($post_id)
    {
        $post = Blog::find($post_id);
        $category = Category::all();
        $authors = Author::all();
        return view('admin.post.edit', compact('post', 'category','authors'));
    }


    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();

        $post = Blog::find($post_id);

        $post->category_id = $data['category_id'];
        $post->author_id = $data['author_id'];
        $post->title = $data['title'];
        $post->slug = Str::slug($data['title']);
        $post->description = $data['description'];
        $post->status = $request->has('status');

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image = $filename;
        }


        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image1 = $filename;
        }

        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $post->image2 = $filename;
        }

        $post->update();

        return redirect('admin/posts')->with('message', 'Post updated succesfully');
    }


    public function delete($post_id)
    {
        $post = Blog::find($post_id);

        if ($post) {
            $post->delete();
            return redirect('admin/posts')->with('message', 'Post deleted succesfully');
        } else {
            return redirect('admin/posts')->with('message', 'No Post ID found');
        }
    }
}
