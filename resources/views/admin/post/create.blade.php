@extends('layouts.master')


@section('title','Add Post')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Add post</h4>
    </div>

    <div  class="mt-3">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
    </div>

    @if (session('message'))
    <div class="alert-success">{{session('message')}}</div>
    @endif

    <div class="whiteBg mt-3">
        <form action="{{url('/admin/add-post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 d-flex justify-content-center">
                <label for="category" class="col-2 col-form-label">Category ID</label>
                <div class="col-7">
                    <select class="form-select" name="category_id">
                        <option selected>Select category</option>
                        @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <label for="title" class="col-2 col-form-label">Title</label>
                <div class="col-7">
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <label for="description" class="col-2 col-form-label">Description</label>
                <div class="col-7">
                    <textarea class="form-control" id="your_summernote" name="description"></textarea>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <label for="category" class="col-2 col-form-label">Author ID</label>
                <div class="col-7">
                    <select class="form-select" name="author_id">
                        <option selected>Select author</option>
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2">
                    <label for="formFile1" class="form-label">Image1</label>
                </div>
                <div class="col-7">
                    <input class="form-control" type="file" name="image1" id="formFile1">
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2">
                    <label for="formFile2" class="form-label">Image2</label>
                </div>
                <div class="col-7">
                    <input class="form-control" type="file" name="image2" id="formFile2">
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2">
                    <label for="formFile3" class="form-label">Image3</label>
                </div>
                <div class="col-7">
                    <input class="form-control" type="file" name="image3" id="formFile3">
                </div>
            </div>

            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2 col-form-label">
                    <label for="flexCheckChecked">Visible</label>
                </div>
                <div class="col-7">
                    <input type="checkbox" name="status" value="1" checked>
                </div>
            </div>


            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-9  d-flex justify-content-end ">
                    <button type="submit" class="btn btn-success">Add Post</button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection