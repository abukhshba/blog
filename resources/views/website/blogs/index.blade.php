@extends('layouts.app')
@section('content')

     <div class="container mx-auto py-6 mt-6 ">
            <!-- Popular Products Section -->

            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-16">
                    <h2 class="text-2xl font-semibold">All Blogs</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Product 1: Snapback Cap -->
                    @foreach($blogs as $blog)

                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <img src="{{ $blog->getFirstMediaUrl('image') }}" alt="{{ $blog->name }}"
                                 class="w-full h-72 object-cover">
                            <div class="p-4 bg-gray-100">
                                <h3 class="text-lg font-semibold text-gray-700">{{ $blog->title }}</h3>
                                <a href="{{ route('blogs.show', [$blog->id]) }}">
                                    <button class="mt-4 w-full text-white py-2 bg-[#ffb929] rounded hover:bg-[#fccc5b]">
                                        See Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

@endsection
