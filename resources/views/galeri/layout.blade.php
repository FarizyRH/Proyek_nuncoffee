
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galeri - Nun Coffee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Galeri Grid -->
                    <div class="row g-3">
                        @foreach ($galeri as $item)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top img-fluid" alt="Galeri Foto">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
