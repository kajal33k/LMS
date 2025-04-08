@extends('frontend.layout.main')
@section('content')

  <!-- Hero Section -->
  <section class="relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Left Content -->
        <div class="order-2 md:order-1">
          <span class="inline-block bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4">100% Satisfaction Guarantee</span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            Your path to <br class="hidden sm:block" />Success with
            <span class="text-primary relative inline-block">
              GOLS
              <svg class="absolute -bottom-2 left-0 w-full h-2 text-secondary" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 160 20">
                <path d="M5 15 Q 80 5, 155 15" />
              </svg>
            </span>
          </h1>
          <p class="text-lg text-gray-600 mb-8 max-w-lg">
            Embark on your journey to success with GOLS EdTech, where innovative learning solutions meet your unique needs. Our expert support and cutting-edge tools empower you to achieve your goals confidently.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#" class="bg-primary hover:bg-red-700 text-white px-6 py-3 rounded-full font-medium text-center transition-colors duration-200 shadow-md hover:shadow-lg">
              <span class="flex items-center justify-center">
                <i class="fas fa-calendar-alt mr-2"></i> Book a Demo
              </span>
            </a>
            <a href="#" class="bg-white hover:bg-gray-50 text-primary border border-primary px-6 py-3 rounded-full font-medium text-center transition-colors duration-200 shadow-md hover:shadow-lg">
              <span class="flex items-center justify-center">
                <i class="fas fa-graduation-cap mr-2"></i> Get a Free Trial
              </span>
            </a>
          </div>
          <div class="mt-8 flex items-center space-x-4">
            <div class="flex -space-x-2">
              <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/1.jpg" alt="Student">
              <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/1.jpg" alt="Student">
              <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/2.jpg" alt="Student">
            </div>
            <div>
              <p class="text-sm font-medium text-gray-700">Trusted by 10,000+ students</p>
              <div class="flex items-center">
                <div class="flex text-yellow-400">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ml-2 text-sm text-gray-600">4.8/5 (2,500 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Image -->
        <div class="order-1 md:order-2 relative">
          <div class="relative rounded-xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Happy students learning with GOLS EdTech" 
                 class="w-full h-auto object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
          </div>
          
          <!-- Stats Card -->
          <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg">
            <div class="flex items-center">
              <div class="p-3 rounded-full bg-primary/10 text-primary">
                <i class="fas fa-chart-line text-xl"></i>
              </div>
              <div class="ml-4">
                <p class="text-sm text-gray-500">Success Rate</p>
                <p class="text-2xl font-bold text-gray-800">98%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 -z-10">
      <svg width="500" height="500" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="250" cy="250" r="250" fill="#FEE2E2" fill-opacity="0.4"/>
      </svg>
    </div>
  </section>

  <!-- Trusted By Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <p class="text-center text-gray-500 text-sm font-medium mb-8">TRUSTED BY LEADING INSTITUTIONS</p>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center justify-center">
        <img src="https://cdn.pixabay.com/photo/2017/08/20/12/13/architecture-2661547_1280.jpg" alt="University" class="h-12 md:h-24 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
        <img src="https://cdn.pixabay.com/photo/2020/07/23/03/22/books-5430309_1280.jpg" alt="College" class="h-12 md:h-24 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
        <img src="https://cdn.pixabay.com/photo/2024/03/12/13/36/ai-generated-8628850_1280.jpg" alt="School" class="h-12 md:h-24 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
        <img src="https://cdn.pixabay.com/photo/2022/04/17/21/57/international-7139072_1280.png" alt="Academy" class="h-12 md:h-24 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
        <img src="https://cdn.pixabay.com/photo/2016/03/31/23/05/architecture-1297382_1280.png" alt="Institute" class="h-12 md:h-24 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
      </div>
    </div>
  </section>
    
  @endsection
