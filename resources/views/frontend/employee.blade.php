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

{{-- grids --}}
<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Section Heading -->
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Why Choose GOLS LMS for Employee Training?
            </h2>
        </div>

        <!-- Features Grid -->
        <div class="grid gap-10 lg:grid-cols-3 items-start">

            <!-- Column 1 -->
            <div class="space-y-10">
                <!-- Feature 1 -->
                <div class="flex items-start gap-4">
                    <div class="text-blue-500 text-3xl">📱</div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Mobile Compatibility</h3>
                        <p class="text-gray-600">
                            In today’s mobile-centric world, GOLS LMS allows employees to access training materials anytime, anywhere—ideal for remote or on-the-go teams.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="flex items-start gap-4">
                    <div class="text-orange-500 text-3xl">💻</div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Customization and Scalability</h3>
                        <p class="text-gray-600">
                            Tailor your training to fit the unique needs of your organization with scalable programs that grow with your team.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex items-start gap-4">
                    <div class="text-yellow-500 text-3xl">🎯</div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Interactive Learning Modules</h3>
                        <p class="text-gray-600">
                            Use quizzes, simulations, and videos to keep employees engaged and improve knowledge retention.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Image Center -->
            <div class="hidden lg:block">
                <img src="https://cdn.pixabay.com/photo/2024/01/30/12/28/ai-generated-8541909_1280.png" alt="GOLS LMS Dashboard" class="rounded-2xl w-full h-auto object-cover">
            </div>

            <!-- Column 2 -->
            <div class="space-y-10">
                <!-- Feature 4 -->
                <div class="flex items-start gap-4">
                    <div class="text-orange-500 text-3xl">📄</div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Certification and Compliance Management</h3>
                        <p class="text-gray-600">
                            Ensure employees complete necessary certifications to stay compliant and reduce organizational risk.
                        </p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="flex items-start gap-4">
                    <div class="text-green-500 text-3xl">🔗</div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Integration Capabilities</h3>
                        <p class="text-gray-600">
                            Seamlessly integrate GOLS LMS with HR systems or CRMs to reduce manual work and streamline training processes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
