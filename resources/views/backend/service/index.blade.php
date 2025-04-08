<x-layouts.app :title="__('Service')">
    <div class="max-w-6xl mx-auto py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Service</h1>
            <a href="{{ route('backend.service.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ New Banner</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="grid gap-6">
            @forelse($services as $service)
                <div class="bg-white p-4 shadow rounded flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold">{{ $service->title }}</h2>
                        <p class="text-gray-600">{{ $service->description }}</p>
                    </div>
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" class="h-16 w-32 object-cover rounded shadow ml-4" />
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('backend.service.edit', $service) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('backend.service.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No banners available.</p>
            @endforelse
        </div>

        <div class="mt-6">{{ $services->links() }}</div>
    </div>
</x-layout>
