@extends('userlayout')
@section('content')

<div class="flex flex-wrap gap-5 my-10 mx-10 justify-center">
    @foreach($products as $product)
    <a href="{{ route('product.show', $product->id) }}">
        <div class="w-[300px] h-[500px] border border-gray-400 flex flex-col items-center p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/' . $product->image) }}" class="w-[200px] h-[200px] object-cover" alt="{{ $product->name }}">
            <h3 class="text-lg font-semibold mt-4">{{ $product->name }}</h3>
            <p class="text-gray-600 mt-2">${{ $product->price }}</p>
</a>
            <div class="flex items-center mt-4">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded-l">
                    -
                </button>
                <input type="text" value="1" class="w-12 text-center border border-gray-300 focus:outline-none">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded-r">
                    +
                </button>
            </div>
            <form action="{{ route('cartadd') }}" method="post">
    @csrf
    <!-- Hidden input to store product ID -->
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
        Add to Bag
    </button>
</form>
        </div>
 
    @endforeach
</div>

@endsection
