@extends('layouts.master')


@section('title','Authors')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg d-flex spaceX">
        <h4 class="text-center">Authors</h4>
        <a href="{{route('admin.add-author')}}" class="btn btn-primary">Add author</a>
    </div>

    <div class="mt-3">
        @if(session('message'))
        <div class="alert alert-success"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;{{session('message')}}</div>
        @endif
    </div>


    <div class="whiteBg mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td>{{$author->name}}</td>
                    <td>{!!Illuminate\Support\Str::limit($author->description,80)!!}</td>
                    <td><img class="img-fluid" src="{{asset('img/'.$author->image)}}" width="60px"></td>
                    <td>
                        <a href="{{url('admin/view-author/'.$author->id)}}"><i class="fa-solid fa-eye text-primary"></i></a>
                        <a href="{{url('admin/edit-author/'.$author->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                        <a href="{{url('admin/delete-author/'.$author->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection