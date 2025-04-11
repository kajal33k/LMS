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

{{-- FEATURE GRID SECTION --}}
<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Why Choose GOLS LMS for Employee Training?
            </h2>
        </div>

        <div class="grid gap-10 lg:grid-cols-3 items-start">
            <!-- Column 1 -->
            <div class="space-y-10">
                @foreach([
                    ['📱', 'Mobile Compatibility', 'In today’s mobile-centric world, GOLS LMS allows employees to access training materials anytime, anywhere—ideal for remote or on-the-go teams.'],
                    ['💻', 'Customization and Scalability', 'Tailor your training to fit the unique needs of your organization with scalable programs that grow with your team.'],
                    ['🎯', 'Interactive Learning Modules', 'Use quizzes, simulations, and videos to keep employees engaged and improve knowledge retention.'],
                ] as [$icon, $title, $desc])
                    <div class="flex items-start gap-4">
                        <div class="text-3xl text-blue-600">{{ $icon }}</div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                            <p class="text-gray-600">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Center Image -->
            <div class="hidden lg:block">
                <img src="https://cdn.pixabay.com/photo/2024/01/30/12/28/ai-generated-8541909_1280.png" alt="GOLS LMS Dashboard" class="rounded-2xl w-full h-auto object-cover">
            </div>

            <!-- Column 2 -->
            <div class="space-y-10">
                @foreach([
                    ['📄', 'Certification & Compliance', 'Ensure employees complete necessary certifications to stay compliant and reduce organizational risk.'],
                    ['🔗', 'Integration Capabilities', 'Seamlessly integrate GOLS LMS with HR systems or CRMs to reduce manual work and streamline training processes.']
                ] as [$icon, $title, $desc])
                    <div class="flex items-start gap-4">
                        <div class="text-3xl text-blue-600">{{ $icon }}</div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                            <p class="text-gray-600">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- TRAINING PLATFORMS --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Training Platform Benefits</h2>
            <p class="text-gray-600 mt-2 text-lg">Powerful, flexible tools to support your workforce.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(range(1, 9) as $i)
                <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="text-3xl text-blue-600">
                            <!-- Replace with dynamic icon if needed -->
                            <span>📘</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Personalized Learning Paths</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        GOLS LMS allows you to create personalized learning paths for each employee based on their role, skill level, and learning objectives. This ensures targeted and efficient training delivery.
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
