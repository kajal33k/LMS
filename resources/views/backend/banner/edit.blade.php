{{-- resources/views/banners/edit.blade.php --}}
<x-layout>
    <div class="max-w-2xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Banner</h1>
        <form action="{{ route('backend.banner.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            @include('banners.form', ['banner' => $banner])
        </form>
    </div>
</x-layout>
