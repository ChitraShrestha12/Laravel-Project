@extends('layouts.master')
@section('content')
    <h2 class="page-title">All Students</h2>

    <table class="students-table">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Address</th>
                <th>Phone No</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->class }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <div class="edit-delete-wrapper">
                            <div class="edit-delete">
                                <a class="edit-btn" href="{{ route('update.form', $user->id) }}">Update</a>
                                <a class="delete-btn" href="{{ route('delete', $user->id) }}">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{$users->links()}}
    </div> 
@endsection
