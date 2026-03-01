@extends('layouts.master')
@section('content')
    <h2 class="page-title">Add Record</h2>
    <form action="{{ route('add') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Address:</label>
            <input type="text" name="address" value="{{ old('address') }}" />
            @error('address')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Class:</label>
            <input type="text" name="class" value="{{ old('class') }}" />
            @error('class')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone') }}" />
            @error('phone')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Add Record</button>
    </form>
@endsection