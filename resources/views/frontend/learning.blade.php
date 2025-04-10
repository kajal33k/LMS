@extends('frontend.layout.main')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    
    <!-- Image Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Image 1 -->
      <div class="w-full h-64 md:h-full">
        <img 
          src="https://cdn.pixabay.com/photo/2019/12/18/13/56/glasses-4704055_1280.jpg" 
          alt="Modern stylish eyeglasses on a reflective surface" 
          class="w-full h-full object-cover rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none"
        >
      </div>

      <!-- Image 2 -->
      <div class="w-full h-64 md:h-full">
        <img 
          src="https://cdn.pixabay.com/photo/2015/11/19/21/14/glasses-1052023_1280.jpg" 
          alt="Vintage eyeglasses with a book in the background" 
          class="w-full h-full object-cover rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none"
        >
      </div>
    </div>

    <!-- Title, Description and Buttons -->
    <div class="p-6 md:p-8 text-center md:text-left">
      <h2 class="text-3xl font-extrabold text-gray-900 leading-tight">Professional Presentation</h2>
      <p class="mt-3 text-gray-600 text-lg leading-relaxed">
        This section presents two high-resolution images in a sleek, side-by-side format, ideal for showcasing products, portfolio highlights, or featured content with elegance and clarity across all devices.
      </p>

      <!-- Buttons -->
      <div class="mt-6 flex flex-col sm:flex-row justify-center md:justify-start gap-4">
        <a href="#" class="inline-block px-6 py-3 bg-red-600 text-white font-semibold rounded-xl shadow hover:bg-red-700 transition duration-200">
          Learn More
        </a>
        <a href="#" class="inline-block px-6 py-3 bg-gray-100 text-gray-800 font-semibold rounded-xl border border-gray-300 hover:bg-gray-200 transition duration-200">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</div>

<section class="bg-pink-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-12">Why Choose GOLS LMS?</h2>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="flex items-start gap-4">
          <span class="text-orange-500 text-2xl">
            <i class="fas fa-code"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Instant Deployment</h3>
            <p class="text-gray-600 text-sm mt-1">Say goodbye to lengthy setups. Our Ready-to-Use GOLS LMS ensures instant deployment, allowing you to kickstart your training initiatives without time delay.</p>
          </div>
        </div>
  
        <!-- Card 2 -->
        <div class="flex items-start gap-4">
          <span class="text-blue-500 text-2xl">
            <i class="fas fa-puzzle-piece"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Comprehensive Features</h3>
            <p class="text-gray-600 text-sm mt-1">The ready-to-use GOLS LMS comes equipped with a comprehensive set of features, covering course management, assessments, analytics, and collaboration tools.</p>
          </div>
        </div>
  
        <!-- Card 3 -->
        <div class="flex items-start gap-4">
          <span class="text-yellow-500 text-2xl">
            <i class="fas fa-sliders-h"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Customization Made Easy</h3>
            <p class="text-gray-600 text-sm mt-1">Tailor it to fit. Our Ready-to-Use LMS is designed for seamless customization, allowing you to align the platform with your organization's unique training goals.</p>
          </div>
        </div>
  
        <!-- Card 4 -->
        <div class="flex items-start gap-4">
          <span class="text-pink-500 text-2xl">
            <i class="fas fa-smile"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">User-Friendly Interface</h3>
            <p class="text-gray-600 text-sm mt-1">Navigate effortlessly. Our LMS features an intuitive interface, making it easy for both administrators and learners to engage with the platform.</p>
          </div>
        </div>
  
        <!-- Card 5 -->
        <div class="flex items-start gap-4">
            <div class="text-indigo-500 text-3xl mt-1">
              <i class="fas fa-shield-alt" aria-hidden="true"></i>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Cost-Effective</h3>
              <p class="mt-1 text-sm text-gray-600 leading-relaxed">
                Minimize development costs with our budget-friendly, ready-to-use solution, reducing the need for extensive customization.
              </p>
            </div>
          </div>
          
  
        <!-- Card 6 -->
        <div class="flex items-start gap-4">
          <span class="text-purple-500 text-2xl">
            <i class="fas fa-chart-line"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Real-Time Analytics</h3>
            <p class="text-gray-600 text-sm mt-1">Make informed decisions. Gain insights into learner progress and engagement with real-time analytics, enabling data-driven adjustments to your training strategy.</p>
          </div>
        </div>
  
        <!-- Card 7 -->
        <div class="flex items-start gap-4">
          <span class="text-blue-600 text-2xl">
            <i class="fas fa-shield-alt"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Security</h3>
            <p class="text-gray-600 text-sm mt-1">GOLS EdTech’s LMS ensures the protection of sensitive learner data and maintains a secure online environment. ISO 9001:2015, ISO 27001 compliant, and adheres to Six Sigma standards.</p>
          </div>
        </div>
  
        <!-- Card 8 -->
        <div class="flex items-start gap-4">
          <span class="text-red-500 text-2xl">
            <i class="fas fa-tools"></i>
          </span>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Maintenance and Support</h3>
            <p class="text-gray-600 text-sm mt-1">GOLS EdTech provides ongoing maintenance and support, ensuring your LMS is up-to-date, and issues are promptly addressed.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="bg-blue-50 py-12 px-4 sm:px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-10">GOLS Edtech Key LMS Features</h2>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Feature Card -->
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-green-500 text-2xl">
              <i class="fas fa-code-branch"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">SCORM and Tin Can API</h3>
              <p class="text-gray-600 text-sm mt-1">
                Supports SCORM and Tin Can API standards, ensuring seamless integration and interoperability.
              </p>
            </div>
          </div>
        </div>
  
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-pink-500 text-2xl">
              <i class="fas fa-sliders-h"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Fully Customizable</h3>
              <p class="text-gray-600 text-sm mt-1">
                Tailor the LMS to meet specific needs and branding with extensive customization options.
              </p>
            </div>
          </div>
        </div>
  
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-indigo-500 text-2xl">
              <i class="fas fa-brain"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Gamification</h3>
              <p class="text-gray-600 text-sm mt-1">
                Engage learners using badges, points, and leaderboards for motivation.
              </p>
            </div>
          </div>
        </div>
  
        <!-- Continue the pattern for the remaining features -->
  
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-purple-500 text-2xl">
              <i class="fas fa-layer-group"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Blended Learning</h3>
              <p class="text-gray-600 text-sm mt-1">
                Combine online and offline methods for a comprehensive learning experience.
              </p>
            </div>
          </div>
        </div>
  
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-yellow-500 text-2xl">
              <i class="fas fa-mobile-alt"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Mobile Compatibility</h3>
              <p class="text-gray-600 text-sm mt-1">
                Fully mobile-compatible design ensures learning on the go.
              </p>
            </div>
          </div>
        </div>
  
        <div class="bg-white rounded-xl shadow-sm p-5 hover:shadow-md transition">
          <div class="flex items-start gap-4">
            <span class="text-orange-500 text-2xl">
              <i class="fas fa-smile-beam"></i>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">User-Friendly Interface</h3>
              <p class="text-gray-600 text-sm mt-1">
                Intuitive and simple navigation enhances the overall user experience.
              </p>
            </div>
          </div>
        </div>
  
        <!-- Add other features like Extended Enterprise, Reporting, etc. similarly -->
  
      </div>
    </div>
  </section>

  
  <section class="bg-white py-12 px-4 sm:px-6 lg:px-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
  
      <!-- Logos Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2016/03/17/07/02/starbucks-1262392_1280.jpg" alt="Oracle" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2015/12/04/07/56/jaguar-1076201_1280.jpg" alt="Salesforce" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2015/01/05/11/02/wordpress-589121_1280.jpg" alt="HRM" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2021/09/13/15/59/youtube-6621791_1280.jpg" alt="WooCommerce" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2020/09/20/05/29/tiktok-5586036_1280.jpg" alt="Shopify" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2015/07/21/06/59/nikon-853641_1280.jpg" alt="Office 365" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2016/09/11/09/47/jaguar-1660955_1280.jpg" alt="SAP" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2016/04/08/20/56/chevrolet-corvette-1316991_1280.jpg" alt="Zoom" class="h-10 object-contain">
        </div>
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg shadow-sm">
          <img src="https://cdn.pixabay.com/photo/2016/03/16/21/45/facebook-1261834_1280.jpg" alt="Microsoft Teams" class="h-10 object-contain">
        </div>
      </div>
  
      <!-- Text Content -->
      <div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
          Integrates with tools you love
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          With our flexible API capabilities, GOLS LMS can easily connect with your existing systems,
          streamlining workflows and enhancing training efficiency. Whether it’s SAP, HRMS, Oracle Fusion,
          or any other platform, we’ve got you covered for seamless integration.
        </p>
      </div>
  
    </div>
  </section>
  


 
  
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  
    <section class="max-w-4xl mx-auto p-6" x-data="{ selected: null }">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold mb-2">Explore GOLS LMS FAQ's</h2>
        <p class="text-gray-600 text-lg font-semibold">Have any questions? Read popular answers below</p>
      </div>
  
      <div class="space-y-4">
  
        <!-- FAQ Item -->
        <div class="border-b pb-4 cursor-pointer" @click="selected !== 1 ? selected = 1 : selected = null">
          <div class="flex justify-between items-center hover:text-red-600">
            <span class="text-base font-medium">What Is An LMS?</span>
            <span class="text-red-600 text-xl" :class="selected === 1 ? 'rotate-90 transform' : ''">&rsaquo;</span>
          </div>
          <div x-show="selected === 1" x-transition class="mt-2 text-gray-600 text-sm">
            An LMS (Learning Management System) is a software application for managing, delivering, and tracking educational courses or training programs.
          </div>
        </div>
  
        <!-- FAQ Item -->
        <div class="border-b pb-4 cursor-pointer" @click="selected !== 2 ? selected = 2 : selected = null">
          <div class="flex justify-between items-center hover:text-red-600">
            <span class="text-base font-medium">How Long Does It Take To Implement GOLSLMS?</span>
            <span class="text-red-600 text-xl" :class="selected === 2 ? 'rotate-90 transform' : ''">&rsaquo;</span>
          </div>
          <div x-show="selected === 2" x-transition class="mt-2 text-gray-600 text-sm">
            GOLS LMS can be implemented in a few weeks depending on your organization’s needs and level of customization.
          </div>
        </div>
  
        <!-- FAQ Item -->
        <div class="border-b pb-4 cursor-pointer" @click="selected !== 3 ? selected = 3 : selected = null">
          <div class="flex justify-between items-center hover:text-red-600">
            <span class="text-base font-medium">Implementing GOLSLMS Typically Takes A Few Weeks, Depending On The Complexity And Customization Requirements Of Your Organization.</span>
            <span class="text-red-600 text-xl" :class="selected === 3 ? 'rotate-90 transform' : ''">&rsaquo;</span>
          </div>
          <div x-show="selected === 3" x-transition class="mt-2 text-gray-600 text-sm">
            Yes, complex configurations may extend timelines, but standard rollouts are typically fast and efficient.
          </div>
        </div>
  
        <!-- FAQ Item -->
        <div class="border-b pb-4 cursor-pointer" @click="selected !== 4 ? selected = 4 : selected = null">
          <div class="flex justify-between items-center hover:text-red-600">
            <span class="text-base font-medium">How Much Does GOLS LMS Cost?</span>
            <span class="text-red-600 text-xl" :class="selected === 4 ? 'rotate-90 transform' : ''">&rsaquo;</span>
          </div>
          <div x-show="selected === 4" x-transition class="mt-2 text-gray-600 text-sm">
            Pricing depends on your organization size, number of users, and features required. Contact our sales team for a quote.
          </div>
        </div>
  
        <!-- FAQ Item -->
        <div class="border-b pb-4 cursor-pointer" @click="selected !== 5 ? selected = 5 : selected = null">
          <div class="flex justify-between items-center hover:text-red-600">
            <span class="text-base font-medium">How Long Does It Take To Fully Integrate GOLS LMS With Native Systems?</span>
            <span class="text-red-600 text-xl" :class="selected === 5 ? 'rotate-90 transform' : ''">&rsaquo;</span>
          </div>
          <div x-show="selected === 5" x-transition class="mt-2 text-gray-600 text-sm">
            Full integration with internal systems typically takes 2–4 weeks depending on API availability and technical support.
          </div>
        </div>
  
      </div>
    </section>


@endsection
