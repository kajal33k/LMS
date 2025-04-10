@extends('frontend.layout.main')
@section('content')
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold mb-4">Flexible Pricing Plans</h2>
      <p class="text-lg text-gray-600">Choose a plan that fits your needs. Upgrade anytime.</p>
    </div>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      
      <!-- Basic Plan -->
      <div class="bg-white p-8 rounded-2xl shadow-md transform hover:-translate-y-2 transition duration-300">
        <h3 class="text-xl font-semibold mb-2">Basic</h3>
        <p class="text-gray-600 mb-6">Ideal for individuals starting out</p>
        <div class="text-4xl font-bold mb-6">$9<span class="text-base font-medium text-gray-500">/mo</span></div>
        <ul class="space-y-3 mb-6">
          <li>✅ Access to core features</li>
          <li>✅ Email support</li>
          <li>✅ 5 Projects</li>
        </ul>
        <a href="#" class="inline-block w-full text-center bg-red-600 text-white py-3 rounded-xl hover:bg-red-700 transition">Get Started</a>
      </div>

      <!-- Pro Plan (Highlighted) -->
      <div class="bg-red-600 text-white p-8 rounded-2xl shadow-lg transform hover:-translate-y-2 transition duration-300 relative z-10">
        <div class="absolute top-0 right-0 bg-white text-red-600 text-xs px-3 py-1 rounded-bl-xl font-semibold">Popular</div>
        <h3 class="text-xl font-semibold mb-2">Pro</h3>
        <p class="mb-6">Perfect for small teams and professionals</p>
        <div class="text-4xl font-bold mb-6">$29<span class="text-base font-medium text-white/80">/mo</span></div>
        <ul class="space-y-3 mb-6">
          <li>✅ Everything in Basic</li>
          <li>✅ Priority support</li>
          <li>✅ 50 Projects</li>
        </ul>
        <a href="#" class="inline-block w-full text-center bg-white text-red-600 font-semibold py-3 rounded-xl hover:bg-gray-100 transition">Start Pro</a>
      </div>

      <!-- Enterprise Plan -->
      <div class="bg-white p-8 rounded-2xl shadow-md transform hover:-translate-y-2 transition duration-300">
        <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
        <p class="text-gray-600 mb-6">Best for growing businesses</p>
        <div class="text-4xl font-bold mb-6">$99<span class="text-base font-medium text-gray-500">/mo</span></div>
        <ul class="space-y-3 mb-6">
          <li>✅ All Pro features</li>
          <li>✅ Dedicated manager</li>
          <li>✅ Unlimited Projects</li>
        </ul>
        <a href="#" class="inline-block w-full text-center bg-red-600 text-white py-3 rounded-xl hover:bg-red-700 transition">Contact Sales</a>
      </div>

    </div>
</section>
@endsection