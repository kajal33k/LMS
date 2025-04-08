{{-- resources/views/banners/edit.blade.php --}}
<x-layout>
    <div class="max-w-2xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit About</h1>
        <form action="{{ route('backend.about.update', $about) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            @include('about.form', ['about' => $about])
        </form>
    </div>
</x-layout>
