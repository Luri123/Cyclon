@extends('layouts.master')


@section('title','Posts')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg d-flex spaceX">
        <h4 class="text-center">View Posts</h4>
        <a href="{{url('admin/add-post')}}" class="btn btn-primary">Add Post</a>
    </div>


    <div class="mt-3">
        @if(session('message'))
        <div class="alert alert-success"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;{{session('message')}}</div>
        @endif
    </div>

    <div class="whiteBg mt-3">
        <table class="table" id="myDataTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Visible</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->status== '1' ? 'Visible' : 'Hidden'}}</td>
                    <td>
                        <a href="{{url('admin/view-post/'.$post->id)}}"><i class="fa-solid fa-eye text-primary"></i></a>
                        <a href="{{url('admin/edit-post/'.$post->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                        <a href="{{url('admin/delete-post/'.$post->id)}}"><i class="fa-solid fa-trash text-danger"></i</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection