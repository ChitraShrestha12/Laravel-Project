@extends('layout')
@section('content')
    <h1>Image Gallery</h1>

    <div class="gallery">
        @foreach ($images as $image)
            <div class="gallery-item">
                <img src="{{ asset('/storage/' . $image->image_upload) }}" alt="Image">
            </div>
        @endforeach
    </div>
@endsection
