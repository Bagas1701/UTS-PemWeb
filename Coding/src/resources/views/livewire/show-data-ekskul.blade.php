
 <!-- resources/views/livewire/show-data-ekskul.blade.php -->
<div class="p-8">
    <h2 class="text-2xl font-bold mb-4">Daftar Ekskul</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($ekskuls as $ekskul)
            <div class="border rounded-xl shadow p-4 bg-white">
                <h3 class="text-lg font-semibold">{{ $ekskul->name }}</h3>
                <p class="text-sm text-gray-600">{{ $ekskul->description }}</p>
                <p class="mt-2 text-sm text-blue-600">Coach: {{ $ekskul->coach_name }}</p>
                @if($ekskul->image)
                    <img src="{{ asset('storage/' . $ekskul->image) }}" class="mx-auto mt-2 w-full h-32 object-contain rounded bg-white" />
                @else
                    <p class="text-xs text-gray-400">Gambar tidak tersedia</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
