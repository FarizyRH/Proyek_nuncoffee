@extends('layouts.landing')

@section('title','Landing Page')
@section('content')
    <div class="max-w-7xl mx-auto p-6">
        <!-- Header -->
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
                            {{ $feedback->user->name ?? 'Anonim' }} - {{ $feedback->created_at->format('F j, Y') }}
                        </p>
                        <p class="mt-2 text-gray-700 mb-3">
                            "{{ $feedback->pesan }}"
                        </p>

                        @auth
                            @if (auth()->user()->id === $feedback->user_id)
                                <!-- Tombol Edit untuk pemilik feedback -->
                                <a href="{{ route('feedback.edit', $feedback->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                    <!-- Ikon Heroicons (Pencil Icon) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                                    </svg>Edit
                                </a>
                            @endif

                            @if (auth()->user()->isAdmin() || auth()->user()->id === $feedback->user_id)
                                <!-- Tombol Hapus untuk admin dan pemilik feedback -->
                                <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus feedback ini?')" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                        <!-- Ikon Heroicons (Trash Icon) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>Delete
                                    </button>
                                </form>
                            @endif
                        @endauth

                    </div>
                @endforeach
            </div>
        </div>

        <!-- Add Feedback Button -->
        <div class="text-center mt-8">
            @auth
                <a href="{{ route('feedback.create') }}"
                   class="px-6 py-2 bg-orange-500 text-black font-medium rounded-lg hover:bg-orange-600 transition">
                    Tambah Feedback
                </a>
            @else
                <p class="text-gray-600">Login untuk memberikan feedback.</p>
            @endauth
        </div>
    </div>
@endsection
