@extends('layouts.master')

@section('title','Edit category')

@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Edit category</h4>
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
        <form action="{{url('/admin/update-category/'.$category->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3 d-flex justify-content-center">
                <label for="name" class="col-2 col-form-label">Category name</label>
                <div class="col-5">
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>
            </div>

            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2 col-form-label">
                    <label for="flexCheckChecked">Visible</label>
                </div>
                <div class="col-5">
                    <input type="checkbox" name="status" value="1" {{ $category->status ? 'checked' : '' }}>
                </div>
            </div>

            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-7  d-flex justify-content-end ">
                    <button type="submit" class="btn btn-success">Save Category</button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection