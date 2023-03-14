@extends('layouts.master')


@section('title','View Author')


@section('content')

<div class="container-fluid mt-4">
    <div class="whiteBg d-flex spaceX">
        <div>
            <h4 class="text-center">View Author</h4>
        </div>
        <div>
            <a href="{{url('admin/edit-author/'.$author->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
            <a href="{{url('admin/delete-author/'.$author->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
        </div>
    </div>

    <div class="whiteBg row m-0 mt-3 ">
        <div class="col-2">
            <img class="img-fluid" src="{{asset('img/'.$author->image)}}">
        </div>
        <div class="col-10">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td>{{$author->id}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{$author->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td>{!!$author->description!!}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection