@extends('layouts.master')


@section('title','User')


@section('content')

<div class="container-fluid px-4 mt-4">
    <div class="whiteBg">
        <h4 class="text-center">Edit User</h4>
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
        <form action="{{url('/admin/update-user/'.$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created at</th>
                        <td>{{$user->created_at->format('d/m/Y')}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="row mb-3 d-flex justify-content-center mx-1">
                <select class="form-select" name="role_as">
                    <option value="1" {{$user->role_as=='1' ? 'selected':''}}>Admin</option>
                    <option value="0" {{$user->role_as=='0' ? 'selected':''}}>User</option>
                </select>
            </div>

            <div class="row mt-2">
                <div class="col-12 d-flex justify-content-start ">
                    <button type="submit" class="btn btn-success">Update Role</button>
                </div>
            </div>
        </form>

    </div>


</div>





@endsection