@extends('layouts.master')

@section('title','Categories')

@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg d-flex spaceX">
        <h4 class="text-center">Categories</h4>
        <a href="{{url('admin/add-category')}}" class="btn btn-primary">Add Category</a>
    </div>

    <div class="mt-3">
        @if (session('message'))
        <div class="alert alert-success"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;{{session('message')}}</div>
        @endif
    </div>

    <div class="whiteBg mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Category name</th>
                    <th scope="col" class="text-center">Slug</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $category)
                <tr>
                    <td class="text-center">{{$category->id}}</td>
                    <td class="text-center">{{$category->name}}</td>
                    <td class="text-center">{{$category->slug}}</td>
                    <td class="text-center">{{$category->status== '1' ? 'Visible' : 'Hidden'}}</td>
                    <td class="text-center">
                        <a href="{{url('admin/edit-category/'.$category->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection