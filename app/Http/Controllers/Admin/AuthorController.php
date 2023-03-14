<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthorFormRequest;
use App\Models\Author;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function index()
    {   $authors=Author::all();
        return view('admin.author.index',compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }


    public function edit($author_id)
    {   $author=Author::find($author_id);
        return view('admin.author.edit',compact('author'));
    }

    public function view($author_id)
    {
        $author = Author::find($author_id);
        return view('admin.author.view', compact('author'));
    }

    public function update(AuthorFormRequest $request, $author_id)
    {   $data = $request->validated();

        $author =Author::find($author_id);
        $author->name = $data['name'];
        $author->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $author->image = $filename;
        }

        $author->update();

        return redirect('admin/authors')->with('message', 'Author updated succesfully');
    }

    public function store(AuthorFormRequest $request)
    {
        $data = $request->validated();

        $author = new Author;
        $author->name = $data['name'];
        $author->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $filename);
            $author->image = $filename;
        }

        $author->save();

        return redirect('admin/authors')->with('message', 'Author added succesfully');
    }

    public function delete($author_id)
    {
        $author = Author::find($author_id);

        if ($author) {
            $author->delete();
            return redirect('admin/authors')->with('message', 'author deleted succesfully');
        } else {
            return redirect('admin/authors')->with('message', 'No author ID found');
        }
    }
}
