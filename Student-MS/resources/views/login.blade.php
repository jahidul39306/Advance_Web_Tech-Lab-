@extends('layouts.app')
@section('content')
<h1>Login</h1>
<form action={{route('loginSubmit')}} method="POST">
    {{csrf_field()}}
    <input name="email" type="text" value="{{old('email')}}" placeholder="email"><br>
    @error('email')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="password" type="password" placeholder="Password"><br>
    @error('password')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="submit" type="submit" value="Submit">
</form>
@endsection