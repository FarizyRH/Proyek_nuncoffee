@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Setting Web</h1>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
          <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
              <th class="px-6 py-3 text-left">Update data</th>
              <th class="px-6 py-3 text-left">Setting data</th>
            </tr>
          </thead>
          <tbody>
            <!-- Baris 1 -->
            <tr class="border-b border-gray-200 hover:bg-gray-50">
              <td class="px-6 py-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    <a href="{{route('aboutus.index')}}"> Upadate data About us</a>
                </button>
              </td>
              <td class="px-6 py-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                   <a href="{{route('galeriControl.index')}}"> Setting Gambar</a>
                </button>
              </td>
            </tr>
            <!-- Baris 2 -->
            <tr class="border-b border-gray-200 hover:bg-gray-50">
              <td class="px-6 py-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                   <a href="{{route('footer.index')}}">Upadate Footer</a>
                </button>
              </td>
              <td class="px-6 py-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    <a href="{{route('products.index')}}">Setting Product</a>
                </button>
              </td>
            </tr>
            <!-- Baris 3 -->
            <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="px-6 py-4">

                </td>
                <td class="px-6 py-4">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                     <a href="{{route(name: 'feedback.index')}}">Setting Feedback</a>
                  </button>
                </td>
              </tr>

              <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="px-6 py-4">

                </td>
                <td class="px-6 py-4">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                     <a href="{{route('testimoni.index')}}"> Setting testimoni</a>
                  </button>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
@endsection
