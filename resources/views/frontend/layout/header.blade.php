
<!-- Navigation -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <h1 class="font-bold text-2xl sm:text-3xl md:text-4xl">Lurnix</h1>
        </div>
  
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-4 lg:space-x-8">
          <a href="#" class="text-primary border-b-2 border-primary px-1 py-2 text-sm font-medium">Home</a>
          
          <div class="relative group">
            <button class="text-gray-700 hover:text-primary px-1 py-2 text-sm font-medium flex items-center">
              Products & Services
              <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 py-1 w-48 z-10">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Learning Platforms</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tutoring Services</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Course Materials</a>
            </div>
          </div>
          
          <a href="#" class="text-gray-700 hover:text-primary px-1 py-2 text-sm font-medium">Pricing</a>
          
          <div class="relative group">
            <button class="text-gray-700 hover:text-primary px-1 py-2 text-sm font-medium flex items-center">
              Solutions
              <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 py-1 w-48 z-10">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Schools</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Students</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Businesses</a>
            </div>
          </div>
          
          <a href="#" class="text-gray-700 hover:text-primary px-1 py-2 text-sm font-medium">Blog</a>
          
          <div class="relative group">
            <button class="text-gray-700 hover:text-primary px-1 py-2 text-sm font-medium flex items-center">
              Company
              <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 py-1 w-48 z-10">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">About Us</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Careers</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact</a>
            </div>
          </div>
        </nav>
  
        <!-- CTA Buttons - Desktop -->
        <div class="hidden md:flex items-center space-x-2 lg:space-x-4">
          <a href="#" class="px-3 py-1.5 lg:px-4 lg:py-2 rounded-full text-xs lg:text-sm font-semibold text-primary hover:bg-red-50">Log In</a>
          <a href="#" class="bg-primary text-white px-3 py-1.5 lg:px-4 lg:py-2 rounded-full text-xs lg:text-sm font-semibold hover:bg-red-700 transition-colors duration-200">Book a Demo</a>
          <a href="#" class="bg-primary text-white px-3 py-1.5 lg:px-4 lg:py-2 rounded-full text-xs lg:text-sm font-semibold hover:bg-red-700 transition-colors duration-200">Free Trial</a>
        </div>
  
        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button type="button" id="mobile-menu-button" class="text-gray-500 hover:text-primary focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#" class="block px-3 py-2 text-base font-medium text-primary border-l-4 border-primary">Home</a>
        
        <div class="px-3">
          <button id="products-mobile-toggle" class="w-full flex justify-between items-center py-2 text-base font-medium text-gray-700 hover:text-primary">
            Products & Services
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="products-mobile-menu" class="hidden pl-4">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">Learning Platforms</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">Tutoring Services</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">Course Materials</a>
          </div>
        </div>
        
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Pricing</a>
        
        <div class="px-3">
          <button id="solutions-mobile-toggle" class="w-full flex justify-between items-center py-2 text-base font-medium text-gray-700 hover:text-primary">
            Solutions
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="solutions-mobile-menu" class="hidden pl-4">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">For Schools</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">For Students</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">For Businesses</a>
          </div>
        </div>
        
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Blog</a>
        
        <div class="px-3">
          <button id="company-mobile-toggle" class="w-full flex justify-between items-center py-2 text-base font-medium text-gray-700 hover:text-primary">
            Company
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="company-mobile-menu" class="hidden pl-4">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">About Us</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">Careers</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary">Contact</a>
          </div>
        </div>
        
        <div class="pt-4 pb-3 border-t border-gray-200">
          <div class="flex items-center px-5 space-x-3">
            <a href="#" class="w-full flex justify-center px-4 py-2 rounded-full text-sm font-semibold text-primary border border-primary hover:bg-red-50">Log In</a>
            <a href="#" class="w-full flex justify-center px-4 py-2 rounded-full text-sm font-semibold text-white bg-primary hover:bg-red-700">Book a Demo</a>
          </div>
          <div class="mt-3 px-5">
            <a href="#" class="w-full block text-center px-4 py-2 rounded-full text-sm font-semibold text-white bg-primary hover:bg-red-700">Free Trial</a>
          </div>
        </div>
      </div>
    </div>
</header>
  
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      const dropdownToggles = [
        { buttonId: 'products-mobile-toggle', menuId: 'products-mobile-menu' },
        { buttonId: 'solutions-mobile-toggle', menuId: 'solutions-mobile-menu' },
        { buttonId: 'company-mobile-toggle', menuId: 'company-mobile-menu' }
      ];
  
      // Toggle mobile menu
      mobileMenuButton.addEventListener('click', function (e) {
        e.stopPropagation();
        mobileMenu.classList.toggle('hidden');
      });
  
      // Toggle each dropdown
      dropdownToggles.forEach(({ buttonId, menuId }) => {
        const button = document.getElementById(buttonId);
        const menu = document.getElementById(menuId);
  
        button.addEventListener('click', function (e) {
          e.stopPropagation();
          menu.classList.toggle('hidden');
  
          // Close others
          dropdownToggles.forEach(({ menuId: otherId }) => {
            if (otherId !== menuId) {
              document.getElementById(otherId).classList.add('hidden');
            }
          });
        });
      });
  
      // Click outside closes mobile menu and dropdowns
      document.addEventListener('click', function (event) {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
          mobileMenu.classList.add('hidden');
  
          // Hide all dropdowns
          dropdownToggles.forEach(({ menuId }) => {
            document.getElementById(menuId).classList.add('hidden');
          });
        }
      });
  
      // Optional: Close menus on ESC key
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
          mobileMenu.classList.add('hidden');
          dropdownToggles.forEach(({ menuId }) => {
            document.getElementById(menuId).classList.add('hidden');
          });
        }
      });
    });
  </script>
  