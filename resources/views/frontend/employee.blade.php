@extends('frontend.layout.main')

@section('content')

{{-- BANNER SECTION --}}
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            
            {{-- Content Area --}}
            <div class="space-y-6">
                <h1 class="text-4xl font-bold text-gray-900">
                    Empower Your Learning Journey
                </h1>
                <p class="text-gray-600 text-lg">
                    GOLS LMS offers a modern, user-friendly platform to enhance skills, track progress, and succeed through smart learning tools and engaging content.
                </p>
                <a href="#get-started" class="inline-block px-6 py-3 bg-red-600 text-white text-lg font-semibold rounded-xl hover:bg-red-700 transition">
                    Get Started
                </a>
            </div>

            {{-- Image Area --}}
            <div class="w-full overflow-hidden rounded-2xl shadow-md">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/08/33/laptop-1071781_1280.jpg" alt="Learning with Laptop" class="w-full h-full object-cover">
            </div>

        </div>
    </div>
</section>

@endsection
