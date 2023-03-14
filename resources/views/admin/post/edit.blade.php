@extends('layouts.master')

@section('title','Edit Post')

@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Edit Post</h4>
    </div>

    <div>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
    </div>

    <div class="whiteBg mt-3">
        <div class="row">
            <div class="col-2">
                <div class="row mb-2">
                    <img class="img-fluid" src="{{asset('img/'.$post->image)}}">
                </div>
                <div class="row mb-2">
                    <img class="img-fluid" src="{{asset('img/'.$post->image1)}}">
                </div>
                <div class="row">
                    <img class="img-fluid" src="{{asset('img/'.$post->image2)}}">
                </div>
            </div>
            <div class="col-10">
                <form action="{{url('/admin/update-post/'.$post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3 d-flex justify-content-center">
                        <label for="category" class="col-2 col-form-label">Category</label>
                        <div class="col-10">
                            <select class="form-select" name="category_id">
                                @foreach($category as $category)
                                <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center">
                        <label for="title" class="col-2 col-form-label">Title</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$post->title}}" name="title">
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center">
                        <label for="description" class="col-2 col-form-label">Description</label>
                        <div class="col-10">
                            <textarea class="form-control" name="description">{!!$post->description!!}</textarea>
                        </div>
                    </div>


                    <div class="row mb-3 d-flex justify-content-center">
                        <label for="category" class="col-2 col-form-label">Author</label>
                        <div class="col-10">
                            <select class="form-select" name="author_id">
                                @foreach($authors as $author)
                                <option value="{{$author->id}}" {{$post->author_id == $author->id ? 'selected':''}}>{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center">
                        <div class="col-2">
                            <label for="formFile" class="form-label">Image1</label>
                        </div>
                        <div class="col-10">
                            <input class="form-control" type="file" name="image1" id="formFile" name="image1">
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center">
                        <div class="col-2">
                            <label for="formFile" class="form-label">Image2</label>
                        </div>
                        <div class="col-10">
                            <input class="form-control" type="file" name="image2" id="formFile">
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center">
                        <div class="col-2">
                            <label for="formFile" class="form-label">Image3</label>
                        </div>
                        <div class="col-10">
                            <input class="form-control" type="file" name="image3" id="formFile">
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-center ">
                        <div class="col-9">
                            <div class="form-check">
                                <input type="checkbox" name="status" value="1" {{ $post->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Visible
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mt-2 justify-content-center">
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </div>
                </form>
            </div>


        </div>


    </div>


    @endsection