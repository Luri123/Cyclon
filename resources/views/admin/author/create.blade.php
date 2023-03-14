@extends('layouts.master')


@section('title','Add author')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Add author</h4>
    </div>

    <div class="mt-3">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <div><i class="fa-solid fa-exclamation"></i>&nbsp;&nbsp;{{$error}}</div>
            @endforeach
        </div>
        @endif
    </div>


    <div class="whiteBg mt-3 ">
        <form action="{{url('/admin/add-author')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 d-flex justify-content-center">
                <label for="title" class="col-2 col-form-label">Name</label>
                <div class="col-7">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <label for="description" class="col-2 col-form-label">Description</label>
                <div class="col-7">
                    <textarea class="form-control" name="description"  rows="5"></textarea>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2">
                    <label for="formFile" class="form-label">Image</label>
                </div>
                <div class="col-7">
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-9  d-flex justify-content-end ">
                    <button type="submit" class="btn btn-success">Add Author</button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection