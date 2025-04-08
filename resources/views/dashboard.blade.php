<x-layouts.app :title="__('Dashboard')">
    {{-- <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div> --}}

    <main class="p-6 lg:p-10 bg-black min-h-screen">
        <!-- Heading -->
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-white">Dashboard</h1>
          <p class="text-gray-50 mt-1">Welcome back, here's what's happening today</p>
        </div>
      
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
          <div class="bg-blue-500 shadow rounded-2xl p-5">
            <p class="text-sm text-gray-500">Total Users</p>
            <h2 class="text-2xl font-bold mt-1">12,450</h2>
            <span class="text-green-600 text-sm mt-2 block">▲ 3.5% this week</span>
          </div>
      
          <div class="bg-teal-500 shadow rounded-2xl p-5">
            <p class="text-sm text-gray-500">Revenue</p>
            <h2 class="text-2xl font-bold mt-1">$34,700</h2>
            <span class="text-green-600 text-sm mt-2 block">▲ 1.8% this week</span>
          </div>
      
          <div class="bg-yellow-500 shadow rounded-2xl p-5">
            <p class="text-sm text-gray-500">Projects</p>
            <h2 class="text-2xl font-bold mt-1">58</h2>
            <span class="text-red-500 text-sm mt-2 block">▼ 2.1% this week</span>
          </div>
      
          <div class="bg-red-500 shadow rounded-2xl p-5">
            <p class="text-sm text-gray-500">Tasks Completed</p>
            <h2 class="text-2xl font-bold mt-1">320</h2>
            <span class="text-green-600 text-sm mt-2 block">▲ 5.2% this week</span>
          </div>
        </div>
      
        <!-- Charts + Activity -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
          <!-- Chart Card -->
          <div class="bg-white shadow rounded-2xl p-6 col-span-2">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Performance Overview</h3>
            <div class="h-64 bg-gray-100 rounded-xl overflow-hidden flex items-center justify-center text-gray-400 text-sm">
              <img 
                src="https://cdn.pixabay.com/photo/2017/12/22/08/01/graph-3033203_1280.jpg" 
                alt="Performance Chart" 
                class="h-full w-full object-cover"
              >
            </div>
          </div>
          
          <!-- Recent Activity -->
          <div class="bg-white shadow rounded-2xl p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Recent Activity</h3>
            <ul class="space-y-4">
              <li class="flex items-start gap-3">
                <div class="w-2.5 h-2.5 mt-2 rounded-full bg-blue-500"></div>
                <p class="text-sm text-gray-600">New user <span class="font-semibold">John Doe</span> registered.</p>
              </li>
              <li class="flex items-start gap-3">
                <div class="w-2.5 h-2.5 mt-2 rounded-full bg-green-500"></div>
                <p class="text-sm text-gray-600">Payment of <span class="font-semibold">$1,200</span> received.</p>
              </li>
              <li class="flex items-start gap-3">
                <div class="w-2.5 h-2.5 mt-2 rounded-full bg-yellow-500"></div>
                <p class="text-sm text-gray-600">Project <span class="font-semibold">Alpha</span> is 80% completed.</p>
              </li>
            </ul>
          </div>
        </div>
      
        <!-- Quick Actions -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
          <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-2xl shadow">
            + Add New User
          </button>
          <button class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-6 rounded-2xl shadow">
            + Create Report
          </button>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-2xl shadow">
            + Add Project
          </button>
          <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-2xl shadow">
            + Assign Task
          </button>
        </div>
      </main>
      
</x-layouts.app>
