@extends('userlayout')

@section('content')
 <!-- main content -->
 <main class="relative min-h-screen">
   <!-- Background Image -->
   
   <div class="absolute left-[60%] top-14">
     <img src="images/2.png" class="h-[450px] w-full ">
   </div>
 
   <!-- Gradient Background -->
   <div class="absolute inset-0 bg-gradient-to-r from-[#4B773B] via-[#3A6F28] to-[#4A952F] opacity-75"></div>
 
   <!-- Foreground Content -->
   <div class="relative z-10">
     <img src="images/1.png" class="h-[470px] float-right mr-16 mt-52">
   </div>
   

   <h1 class="absolute inset-0 flex items-center font-semibold text-4xl font-mono px-16 text-white z-20 tracking-wide ">
      Buy your groceries and <br> have it delivered <br> to your doorstep with <br> ease.
    </h1>

 </main>
  <!-- whyBest -->
 <span class=" flex justify-center font-bold font-serif text-2xl w-[100%]" id="about">Why We Are The Best?</span>

<div id="best" class="flex flex-row items-center mt-7">
  <img src="images/Rectangle 384.png" class=" absolute h-[450px] w-auto mt-[10%] px-5 z-10">
  <img src="images/3.png" class=" h-[600px]  w-auto py-5 px-5 z-20">
  <div class="flex-col  ml-[300px] mx-16">
    <div class="flex items-center space-x-3 border-b py-2 border-red-100">
      <div class="h-3 w-3 rounded-lg bg-green-700"></div>
      <span>We serve you the best of fresh, nutrient-rich, and healthy groceries</span>
    </div>
    
  <div class="flex items-center space-x-3 border-b py-2 border-red-100">
    <div class="h-3 w-3 rounded-lg bg-green-700"></div>
    <span>Swift Delivery</span>
  </div>
  <div class="flex items-center space-x-3 border-b py-2 border-red-100">
    <div class="h-3 w-3 rounded-lg bg-green-700"></div>
    <span>Great Refund Policy</span>
  </div>
  <div class="flex items-center space-x-3 border-b py-2 border-red-100">
    <div class="h-3 w-3 rounded-lg bg-green-700"></div>
    <span>Wide coverage Map</span>
  </div>
  </div>
</div>
<!-- Flash Sale -->
 <div class="  mt-10">
  <div id="line" class="flex flex-row justify-center items-center gap-2 mb-10">
    <div id="fline" class="w-36 h-1 border border-amber-950 bg-black"> </div>
    <span class="text-lg">Flash Sales</span>
    <div id="sline" class="w-36 h-1 border border-amber-950 bg-black"></div>

  </div>
  
  <div id="count-down" class="flex flex-row justify-center gap-5 mb-12">
    <div id="days" class="h-20 w-52 bg-black flex items-center justify-center">
      <span class="text-white text-center">
        02<br>Days
      </span>
    </div>
    
    <div id="days" class="h-20 w-52 bg-black flex items-center justify-center">
      <span class="text-white text-center">
        14<br>Hours
      </span>
    </div>
    <div id="days" class="h-20 w-52 bg-black flex items-center justify-center">
      <span class="text-white text-center">
        26<br>Minutes
      </span>
    </div>
  </div>



 </div>

 <!-- Flash Sale items -->
  <div class="  flex flex-row  items-center  gap-10 px-10 h-60 w-[100%] bg-blue-100  mb-36">

    <div class="w-48  bg-white border border-black rounded-lg">
<div id="image"> <img src="images/4.png" > </div>
  <div class="py-2 px-5">hhhh</div>


</div>
</div>


  <!-- ALL CATEGORIES -->
  <div class="bg-gray-100 p-6">
  <h1 class="text-lg font-bold flex justify-center mb-9">ALL CATEGORIES</h1>
  <div class="container overflow-x-auto">
    <div class="flex space-x-6">
      @foreach ($categories as $category)
        <!-- Product Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden min-w-[250px]">
          <a href="{{route('categoryshow',$category->id)}}">
        
          <img src="{{ asset('images/' . $category->picture) }}" alt="{{ $category->name }}" class="w-full h-48 object-cover">
</a>
          <div class="p-4">
            <h3 class="text-lg font-semibold">{{ $category->name }}</h3>
          
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <a href="{{route('allcategory')}}"><button class="float-right px-3 mt-4  border border-green-500 rounded-lg"> View All </button>
</a>
</div>


  <!-- ALL products -->
  
  <div class="bg-gray-100 p-6">
  <h1 class="text-lg font-bold flex justify-center mb-9"> ALL PRODUCTS </h1>
<div class="container mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden  w-[300px]">
            <a href="{{ route('product.show', $product->id) }}">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="  flex justify-center h-40 ">
</a>
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <p class="text-gray-600 mt-2">${{ $product->price }}</p>
                    
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>

  @endsection


