@extends('layouts.landing')

@section('title','Landing Page')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Button to add feedback -->
        <div class="mb-4">
            <a href="{{ route('feedback.create') }}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
                <!-- Ikon Add -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Feedback
            </a>
        </div>

        <!-- Feedbacks displayed horizontally and centered -->
        <div class="mt-6 flex flex-wrap justify-center gap-4">
            @foreach ($feedbacks as $feedback)
                <div class="bg-white p-4 rounded-lg shadow-lg border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <p><strong>{{ $feedback->nama }}</strong> ({{ $feedback->user->name }})</p>
                            <p class="text-sm text-gray-500">{{ $feedback->created_at->format('F j, Y, g:i a') }}</p>
                        </div>

                        <!-- Check if the current user is the one who created the feedback or is an admin -->
                        @if (Auth::user()->id == $feedback->user_id || Auth::user()->role == 'admin')
                            <div class="flex space-x-2">
                                <!-- Show Edit button if the current user is the creator or admin -->
                                @if (Auth::user()->id == $feedback->user_id && Auth::user()->role == 'user')
                                    <a href="{{ route('feedback.edit', $feedback->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                        <!-- Ikon Heroicons (Pencil Icon) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                                        </svg>Edit
                                    </a>
                                @endif

                                <!-- Show Delete button if the current user is the creator or admin -->
                                <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus feedback ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">

                                        <!-- Ikon Trash -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2M7 7h10l-1 14H8L7 7z" />
                                        </svg>Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                    <p class="text-gray-700">{{ $feedback->pesan }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
