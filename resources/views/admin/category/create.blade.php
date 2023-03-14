@extends('layouts.master')


@section('title','Add category')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Add category</h4>
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

    <div class="whiteBg mt-3">
        <form action="{{url('/admin/add-category')}}" method="post">
            @csrf
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2 col-form-label">
                    <label for="name">Category name</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-2 col-form-label">
                    <label for="flexCheckChecked">Visible</label>
                </div>
                <div class="col-5">
                    <input type="checkbox" name="status" value="1" checked>
                </div>
            </div>

            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-7  d-flex justify-content-end ">
                    <button type="submit" class="btn btn-success">Add category</button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection