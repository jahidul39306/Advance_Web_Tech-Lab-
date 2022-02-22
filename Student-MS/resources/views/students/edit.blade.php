@extends('layouts.app')
@section('content')
<h1>Edit Student</h1>
<form action={{route("student.edit", ['id'=>$student->id])}} method="POST" class="form-group">
    {{csrf_field()}}
    <input name="name" type="text" value="{{old('name')===null ? $student->name : old('name')}}" placeholder="Name" class="form-group"><br>
    @error('name')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="email" type="text" value="{{old('email')===null ? $student->email : old('email')}}" placeholder="E-mail" class="form-group"><br>
    @error('email')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    {{-- <input name="password" type="password" placeholder="Password"><br>
    @error('password')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input name="confirm_password" type="password" placeholder="Confirm Password"><br>
    @error('confirm_password')
    <span class="text-danger">{{$message}}</span><br>
    @enderror --}}
    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
</form>
@endsection