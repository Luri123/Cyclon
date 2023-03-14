@extends('layouts.master')

@section('title','View Post')

@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg d-flex spaceX">
        <div>
            <h4 class="text-center">View Post</h4>
        </div>
        <div>
            <a href="{{url('admin/edit-post/'.$post->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
            <a href="{{url('admin/delete-post/'.$post->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
        </div>
    </div>

    <div class="whiteBg mt-3">
        <table class="table">

            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$post->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Title</th>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <th scope="row">slug</th>
                    <td>{{$post->slug}}</td>
                </tr>
                <tr>
                    <th scope="row">Category</th>
                    <td>{{$post->category->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Author</th>
                    <td>{{$post->author->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td>{!!$post->description!!}</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>{{$post->status== '1' ? 'Visible' : 'Hidden'}}</td>
                </tr>
                <tr>
                    <th scope="row">Images</th>
                    <td>
                        <img class="img-fluid" src="{{asset('img/'.$post->image)}}" width="100px">
                        <img class="img-fluid" src="{{asset('img/'.$post->image1)}}" width="100px">
                        <img class="img-fluid" src="{{asset('img/'.$post->image2)}}" width="100px">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection