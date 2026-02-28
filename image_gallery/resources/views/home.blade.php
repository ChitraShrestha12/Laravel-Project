@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <h2>Upload Image</h2>
            <p>Select an image file</p>

            <form action="{{ route('imageUpload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (session('status'))
                    <div class="success-message">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="file" name="image" accept="image/*">

                @error('image')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <button type="submit">Upload</button>
            </form>
        </div>
    </div>
@endsection