<x-layouts.app :title="__('Banner')">
    <div class="max-w-6xl mx-auto py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Banners</h1>
            <a href="{{ route('backend.banner.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ New Banner</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="grid gap-6">
            @forelse($banners as $banner)
                <div class="bg-white p-4 shadow rounded flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold">{{ $banner->title }}</h2>
                        <p class="text-gray-600">{{ $banner->description }}</p>
                    </div>
                    @if($banner->image)
                        <img src="{{ asset('storage/' . $banner->image) }}" class="h-16 w-32 object-cover rounded shadow ml-4" />
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('backend.banner.edit', $banner) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('backend.banner.destroy', $banner) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No banners available.</p>
            @endforelse
        </div>

        <div class="mt-6">{{ $banners->links() }}</div>
    </div>
</x-layout>
