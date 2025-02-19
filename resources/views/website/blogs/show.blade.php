@extends('layouts.app')
@section('content')

    <!-- Blog Details Section -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <!-- Blog Title -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $blog->title }}</h1>

        <!-- Blog Image -->
        <img src="{{ $blog->getFirstMediaUrl('image') }}" alt="Blog Image" class="w-full h-auto rounded-lg mb-6">

        <!-- Blog Content -->
        <div class="text-gray-700 leading-relaxed">
            <p class="mb-4">

                {!! $blog->content !!}
            </p>
        </div>
    </div>
@endsection
