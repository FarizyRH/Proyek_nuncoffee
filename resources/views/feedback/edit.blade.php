@extends('layouts.landing')

@section('title', 'Landing Page')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <!-- Heading -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-extrabold text-orange-500 leading-tight">
            {{ __('Edit Your Feedback') }}
        </h2>
        <p class="text-gray-600 text-sm mt-2">We value your input to improve our coffee shop experience!</p>
    </div>

    <!-- Form Container -->
    <div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-2xl">
        <form method="POST" action="{{ route('feedback.update', $feedback->id) }}">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-800">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $feedback->nama) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-800">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $feedback->email) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Pesan -->
            <div class="mb-6">
                <label for="pesan" class="block text-sm font-medium text-gray-800">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">{{ old('pesan', $feedback->pesan) }}</textarea>
                <x-input-error :messages="$errors->get('pesan')" class="mt-2" />
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <x-primary-button class="px-6 py-3 bg-orange-600 text-white rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    Simpan Perubahan
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
