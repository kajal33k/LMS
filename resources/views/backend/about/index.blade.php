<x-layouts.app :title="__('About')">
    <div class="max-w-6xl mx-auto py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">About</h1>
            <a href="{{ route('backend.about.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ New About</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="grid gap-6">
            @forelse($abouts as $about)
                <div class="bg-white p-4 shadow rounded flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold">{{ $about->title }}</h2>
                        <p class="text-gray-600">{{ $about->description }}</p>
                    </div>
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" class="h-16 w-32 object-cover rounded shadow ml-4" />
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('backend.about.edit', $about) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('backend.about.destroy', $about) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No Abouts available.</p>
            @endforelse
        </div>

        <div class="mt-6">{{ $abouts->links() }}</div>
    </div>
</x-layout>
