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
    
    <section class="w-full px-4 py-12 md:py-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      
      <!-- Text Content -->
      <div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
          We operate <span class="text-black">Across borders, Beyond Limits</span>
        </h2>
        <p class="text-lg leading-relaxed mb-4">
          GOLS EdTech is a global leader in providing innovative and comprehensive learning management solutions. 
          Our platform empowers organizations across various industries to deliver effective training and 
          development programs.
        </p>
        <p class="text-lg leading-relaxed mb-8">
          Ready to elevate your training with GOLS BEST LMS?
        </p>
        <a href="#contact" class="inline-block bg-red-600 text-white font-semibold px-6 py-3 rounded-full shadow hover:bg-red-700 transition">
          Contact us
        </a>
      </div>

      <!-- Map Image -->
      <div class="flex justify-center">
        <img src="https://cdn.pixabay.com/photo/2023/10/06/18/05/ai-generated-8298816_1280.png" alt="World Map showing global presence" class="max-w-full h-auto">
      </div>
    </div>
  </section>

  <section class="bg-pink-100 py-16 px-4">
    <div class="max-w-7xl mx-auto text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-6">Reason Why Clients prefer to Work with Us</h2>
      <a href="#" class="inline-block bg-red-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-red-700 transition">
        Book a Demo
      </a>
    </div>
  
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div class="rounded-2xl overflow-hidden ">
        <img src="https://cdn.pixabay.com/photo/2016/10/18/20/33/bookshelves-1751334_1280.png" alt="Client Working" class="w-full h-auto object-cover">
      </div>
      <div>
        <h3 class="text-3xl font-bold text-gray-900 mb-4">
          GOLS LMS <span class="text-gray-700">(Ready to use LMS)</span>
        </h3>
        <p class="text-lg text-gray-700 mb-6">
          GOLS LMS ensures quick deployment, user-friendly interface, rich multimedia support, mobile compatibility, 
          seamless LMS Integrations and dedicated customer service for optimal learning.
        </p>
        <a href="#" class="inline-block bg-red-600 text-white px-5 py-2 rounded-full text-md font-medium hover:bg-red-700 transition">
          Read More
        </a>
      </div>
    </div>
  </section>
  
  <section>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h3 class="text-3xl font-bold text-gray-900 mb-4">
          GOLS LMS <span class="text-gray-700">(Ready to use LMS)</span>
        </h3>
        <p class="text-lg text-gray-700 mb-6">
          GOLS LMS ensures quick deployment, user-friendly interface, rich multimedia support, mobile compatibility, 
          seamless LMS Integrations and dedicated customer service for optimal learning.
        </p>
        <a href="#" class="inline-block bg-red-600 text-white px-5 py-2 rounded-full text-md font-medium hover:bg-red-700 transition">
          Read More
        </a>
      </div>

      <div class="rounded-2xl overflow-hidden ">
        <img src="https://cdn.pixabay.com/photo/2024/02/28/03/55/ai-generated-8601128_1280.png" alt="Client Working" class="w-full h-auto object-cover">
      </div>
    
    </div>
  </section>

  <section>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div class="rounded-2xl overflow-hidden ">
        <img src="https://cdn.pixabay.com/photo/2020/09/29/12/56/teaching-5612761_1280.jpg" alt="Client Working" class="w-full h-auto object-cover">
      </div>
    
      
      <div>
        <h3 class="text-3xl font-bold text-gray-900 mb-4">
          GOLS LMS <span class="text-gray-700">(Ready to use LMS)</span>
        </h3>
        <p class="text-lg text-gray-700 mb-6">
          GOLS LMS ensures quick deployment, user-friendly interface, rich multimedia support, mobile compatibility, 
          seamless LMS Integrations and dedicated customer service for optimal learning.
        </p>
        <a href="#" class="inline-block bg-red-600 text-white px-5 py-2 rounded-full text-md font-medium hover:bg-red-700 transition">
          Read More
        </a>
      </div>

    
    </div>
  </section>


  <section class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold mb-4">Find Your Perfect Online Training Solution</h1>
    <p class="text-lg mb-10">GOLS LMS can support the diverse needs of all your learners – whether they are employees, members, volunteers, or clients.</p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
      <!-- Left Column: Training Options -->
      <div class="space-y-10">
        <!-- Employee Training -->
        <div>
          <h2 class="text-2xl font-bold mb-1">Employee Training</h2>
          <p class="text-gray-700">Elevating Employee Training, Igniting Growth</p>
        </div>
        <hr class="border-gray-300" />

        <!-- Customer / Partner Training -->
        <div>
          <h2 class="text-2xl font-bold mb-1">Customer / Partner Training <span class="text-lg font-normal">(Enterprise)</span></h2>
          <p class="text-gray-700">Customer Success Through Proactive Training</p>
        </div>
        <hr class="border-gray-300" />

        <!-- Members Training -->
        <div>
          <h2 class="text-2xl font-bold mb-1">Members Training</h2>
          <p class="text-gray-700">Empowering Members Through Effective Training</p>
        </div>
        <hr class="border-gray-300" />

        <!-- Volunteers Training -->
        <div>
          <h2 class="text-2xl font-bold mb-1">Volunteers Training</h2>
          <p class="text-gray-700">Enable Volunteers, Spark Positive Change</p>
        </div>
      </div>

      <!-- Right Column: Text and Image -->
      <div class="flex flex-col space-y-6">
        <div class="border border-gray-400 rounded-2xl p-6 shadow-md bg-white text-base leading-relaxed">
          Revolutionize skill development for your employees through our collaboration. With our comprehensive solutions, teams thrive in today’s dynamic business landscape, driving success and achieving their full potential.
        </div>
        <img src="https://cdn.pixabay.com/photo/2024/05/20/08/19/ai-generated-8774130_1280.jpg" alt="Team training" class=" object-cover w-full h-auto" />
      </div>
    </div>
  </section>


    <section class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left Content -->
        <div>
          <h2 class="text-4xl font-bold mb-4">GOLS Course Library</h2>
          <p class="text-lg mb-6">
            The rapidly growing library includes courses from Compliance, Soft skills & Behavioural training. Courses can be seamlessly delivered through either your organization’s existing Learning Management System (LMS) or, for organizations without an LMS. This flexibility ensures a tailored solution regardless of your current eLearning infrastructure.
          </p>
          <a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-full transition duration-300">
            Explore Course Library
          </a>
        </div>
  
        <!-- Right Cards -->
        <div class="grid sm:grid-cols-2 gap-6">
          <!-- Card 1 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2021/06/17/19/13/books-6344402_1280.png" alt="Professional Development" class="w-full h-40 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold mb-2">Professional Development</h3>
              <p class="text-sm text-gray-700">
                Foster career growth with courses on leadership, communication, time management, and project management.
              </p>
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2015/08/19/05/39/hand-895588_1280.jpg" alt="Sales and Marketing" class="w-full h-40 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold mb-2">Sales and Marketing</h3>
              <p class="text-sm text-gray-700">
                Equip your team with sales techniques, customer relationship management (CRM), marketing strategies, and negotiation skills.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="max-w-7xl mx-auto px-4 py-12 flex flex-col-reverse lg:flex-row items-center gap-10">
    
      <!-- Left: Image -->
      <div class="w-full lg:w-1/2">
        <img src="https://cdn.pixabay.com/photo/2024/05/21/19/57/computer-8779036_1280.jpg" alt="Edtech LMS" class="rounded-t-[100px] w-full object-cover shadow-md">
      </div>
  
      <!-- Right: Content -->
      <div class="w-full lg:w-1/2 text-center lg:text-left">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
          Discover why GOLS Edtech is the best LMS Software
        </h2>
        <p class="text-gray-700 text-lg mb-6">
          Revolutionize your education experience with innovative features and comprehensive tools designed to enhance learning outcomes. Join thousands of satisfied users today!
        </p>
        <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
          <a href="#" class="bg-red-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-red-700 transition">
            Book a Demo
          </a>
          <a href="#" class="bg-white text-red-600 px-6 py-3 rounded-full text-sm font-semibold border border-red-300 hover:bg-red-50 transition">
            Get a Free Trial
          </a>
        </div>
      </div>
  
    </section>

  @endsection
