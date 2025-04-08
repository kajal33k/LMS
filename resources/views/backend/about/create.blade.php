<x-layouts.app :title="__('About')">
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-black shadow-xl rounded-2xl">
        <h2 class="text-2xl font-semibold text-white mb-6">Create New About</h2>
    
        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-600 p-3 rounded-lg">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('backend.about.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
    
            <div>
                <label for="title" class="block text-sm font-medium text-white">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
    
            <div>
                <label for="description" class="block text-sm font-medium text-white">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
            </div>
    
            <div>
                <label for="image" class="block text-sm font-medium text-white">Banner Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            </div>
    
            <div class="flex justify-end">
                <button type="submit" class="inline-flex items-center px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-all">
                    Create Banner
                </button>
            </div>
        </form>
    </div>
    </x-layouts.app>
    