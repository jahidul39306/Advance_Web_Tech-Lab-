@extends('layouts.app')
@section('content')
<h1>Add Student</h1>
<form action={{route("student.submit")}} method="POST">
    {{csrf_field()}}
    <input name="name" type="text" value="{{old('name')}}" placeholder="Name"><br>
    @error('name')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="email" type="text" value="{{old('email')}}" placeholder="E-mail"><br>
    @error('email')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="password" type="password" placeholder="Password"><br>
    @error('password')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="confirm_password" type="password" placeholder="Confirm Password"><br>
    @error('confirm_password')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="submit" type="submit" value="Submit">
</form>
@endsection