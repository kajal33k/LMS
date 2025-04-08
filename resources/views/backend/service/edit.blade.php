{{-- resources/views/banners/edit.blade.php --}}
<x-layout>
    <div class="max-w-2xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Service</h1>
        <form action="{{ route('backend.service.update', $service) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            @include('services.form', ['service' => $service])
        </form>
    </div>
</x-layout>
