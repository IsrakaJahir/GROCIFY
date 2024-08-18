<!-- resources/views/pages/user/productdetails.blade.php -->
@extends('userlayout')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
            <p class="text-gray-600 mt-4">${{ $product->price }}</p>
            <p class="mt-6">{{ $product->description }}</p>
            
            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Add to Cart
            </button>
        </div>
    </div>
</div>
@endsection
