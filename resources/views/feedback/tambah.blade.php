@extends('layouts.landing')

@section('title','Landing Page')

@section('content')
    <div class="bg-white min-h-screen py-10">
        <!-- Heading -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-orange-500 leading-tight">
                {{ __('Add Your Feedback') }}
            </h2>
            <p class="text-krem text-sm mt-2">We value your input to improve our coffee shop experience!</p>
        </div>

        <div class="max-w-2xl mx-auto p-6 bg-orange-500 rounded-lg shadow-lg">
            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Feedback Form -->
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="nama" class="block text-sm font-medium text-black">Name</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Enter your name" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-orange-700 focus:border-orange-700 sm:text-sm p-3" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-orange-700 focus:border-orange-700 sm:text-sm p-3" required>
                </div>

                <div class="mb-6">
                    <label for="pesan" class="block text-sm font-medium text-black">Message</label>
                    <textarea id="pesan" name="pesan" rows="5" placeholder="Write your feedback here..." class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-orange-700 focus:border-orange-700 sm:text-sm p-3" required>{{ old('pesan') }}</textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-black text-orange-500 text-sm font-medium rounded-lg hover:text-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-700 shadow-lg transform hover:scale-105 transition">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
