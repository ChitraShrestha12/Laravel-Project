@extends('layouts.master')
@section('content')
    <h2 class="page-title">Update Record</h2>
    <form action="{{route('update')}}" method="POST">
        @csrf
        <label>Roll No:</label>
        <input type="text" name="id" value="{{$user->id}}" readonly><br><br>

        <label>Name:</label>
        <input type="text" name="name" value="{{$user->name}}"><br><br>

        <label>Address:</label>
        <input type="text" name="address" value="{{$user->address}}"><br><br>

        <label>Class:</label>
        <input type="text" name="class" value="{{$user->class}}"><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{$user->phone_number}}"><br><br>

        <button type="submit">Update Record</button>
    </form>
@endsection
