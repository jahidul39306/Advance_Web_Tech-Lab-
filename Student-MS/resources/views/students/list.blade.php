@extends('layouts.app')
@section('content')
<h1>Student list</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Action</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Password</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d->id}}</td>
        <td><a href={{Route('student.get', ['id'=>$d->id])}}><button class="btn btn-primary">Edit</button></a></td>
        <td>{{$d->name}}</td>
        <td>{{$d->email}}</td>
        <td>{{$d->password}}</td>
    </tr>
    @endforeach
</table>
@endsection