@extends('layouts.master')


@section('title','Users')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg d-flex spaceX">
        <h4 class="text-center">View Users</h4>
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
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role_as== '1' ? 'Admin' : 'User'}}</td>
                    <td>
                        <a href="{{url('admin/user/'.$user->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>





</div>

@endsection