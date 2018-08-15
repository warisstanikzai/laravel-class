@extends('user.master')

@section('title','Users')

@section('page-level-css')

<style>
    tr{
        color:blueviolet;
    }
</style>
@endsection
@section('content')

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>email</th>
        <th>Created Date</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
    </tr>
    @endforeach
</table>

@admin

@endsection
