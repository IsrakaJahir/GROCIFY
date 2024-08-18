@extends('userlayout');
@section('content')



<div class="bg-gray-100 p-6">
  <h1 class="text-lg font-bold flex justify-center mb-9">ALL CATEGORIES</h1>
  <div class="container mx-auto">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach ($categories as $category)
        <!-- Product Card -->
        <div class="bg-white shadow-md rounded-lg ">
          <img src="{{ asset('images/' . $category->picture) }}" alt="{{ $category->name }}" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">{{ $category->name }}</h3>
          
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>


@endsection