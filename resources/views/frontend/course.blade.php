@extends('frontend.layout.main')
@section('content')
{{-- banneer --}}

  <div class="max-w-6xl mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
      
      <!-- Content -->
      <div class="space-y-4">
        <h2 class="text-3xl font-bold">Never Stop Learning</h2>
        <p class="text-gray-600 text-lg">
          Explore the future of online learning with flexible, interactive, and accessible platforms. 
          Empower yourself and your team with modern learning systems tailored to your growth.
        </p>
        <a href="#" class="inline-block mt-4 px-6 py-3 bg-red-600 text-white rounded-xl hover:bg-red-700 transition">Learn More</a>
      </div>

      <!-- Image Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="w-full h-64 overflow-hidden rounded-xl shadow">
          <img src="https://cdn.pixabay.com/photo/2018/09/04/10/27/never-stop-learning-3653430_1280.jpg" alt="Learning" class="w-full h-full object-cover">
        </div>
        <div class="w-full h-64 overflow-hidden rounded-xl shadow">
          <img src="https://cdn.pixabay.com/photo/2020/05/12/13/33/online-learning-5163039_1280.jpg" alt="Online Learning" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>


@endsection