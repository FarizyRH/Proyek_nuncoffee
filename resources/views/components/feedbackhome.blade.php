
    <div class="max-w-7xl mx-auto p-6">
        <!-- Header -->
        <h1 class="mb-4 text-center">Feedback</h1>
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Segelas Kebahagiaan, Seteguk Kenyamanan
            </h1>
            <p class="text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <!-- Feedback Section -->
        <div class="mb-8">
            {{-- <h2 class="text-xl font-semibold text-gray-800">Kolaborasi Sukses Kami:</h2> --}}
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($feedbacks as $feedback)
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                        <h3 class="text-lg font-bold text-gray-800">
                            {{ $feedback->nama }}
                        </h3>
                        <p class="text-sm text-gray-500">
                            {{ $feedback->user->name }} - {{ $feedback->created_at->format('F j, Y') }}
                        </p>
                        <p class="mt-2 text-gray-700 mb-3">
                            "{{ $feedback->pesan }}"
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Add Feedback Button -->
        <div class="text-center mt-8">
            <a href="{{ route('feedback.create') }}"
               class="px-6 py-2 bg-orange-500 text-black font-medium rounded-lg hover:bg-orange-600 transition">
                Tambah Feedback
            </a>
        </div>
    </div>

