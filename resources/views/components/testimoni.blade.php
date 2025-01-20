
<div class="max-w-7xl mx-auto p-4">
    <!-- Button to add testimonial -->
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-gray-800">Apa Kata Mereka: Testimoni dari Pengguna Setia Kami</h2>
    </div>

    @auth
        <!-- Button to add testimonial visible only for authenticated users -->
        <a href="{{ route('testimoni.create') }}" class="inline-flex items-center px-3 py-1.5 bg-orange-600 text-black text-base font-medium rounded-full shadow-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-transform transform hover:scale-105">
            <!-- Icon Add -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Testimoni
        </a>
    @endauth

    <!-- Display success message if available -->
    @if (session('success'))
    <div class="alert alert-success mb-6 p-5 bg-green-100 text-green-700 rounded-md shadow-lg">
        {{ session('success') }}
    </div>
    @endif

    <!-- Testimonials displayed in a grid -->
    <div class="mb-5">
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @forelse ($testimoni as $testi)
                <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl border border-gray-200 transition-all">
                    <h3 class="text-xl font-semibold text-gray-800">
                        {{ $testi->nama }}
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">
                        {{ $testi->user?->name ?? 'Tidak diketahui' }}
                    </p>
                    <p class="text-gray-700">
                        "{{ htmlspecialchars($testi->isi) }}"
                    </p>

                    <!-- Display the image if available -->
                    @if ($testi->gambar)
                        <div class="mt-3">
                            <img src="{{ Storage::url($testi->gambar) }}" alt="Gambar Testimoni" class="w-28 h-28 object-cover retangle-full shadow-md border-2 border-gray-100 mx-auto">
                        </div>
                    @endif

                   
                </div>
            @empty
                <p class="text-gray-500">Belum ada testimoni yang tersedia.</p>
            @endforelse
        </div>
    </div>

</div>

