@extends('userlayout')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-row">
        <div class="w-[400px] h-[400px] border border-blue-500 mx-9 flex justify-center ">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" 
     class="  w-72 h-auto object-cover mt-7 transform transition-transform duration-300 hover:scale-125 cursor-zoom-in">

        </div>
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
