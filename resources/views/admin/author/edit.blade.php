@extends('layouts.master')


@section('title','Edit author')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Edit Author</h4>
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
                <img class="img-fluid" src="{{asset('img/'.$author->image)}}">
            </div>
            <div class="col-10">
                <form action="{{url('/admin/update-author/' . $author->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="title" class="col-2 col-form-label">Name</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="name" value="{{$author->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-2">
                        <label for="description" class="col-2 col-form-label">Description</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" name="description" rows="5">{{$author->description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="formFile" class="form-label">Image</label>
                        </div>
                        <div class="col-10">
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-end ">
                            <button type="submit" class="btn btn-success">Update Author</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>





    </div>

</div>

@endsection