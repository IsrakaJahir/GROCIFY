<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- navbar -->
 <nav class=" z-30 flex px-5 py-5 justify-between items-center bg-gradient-to-r from-[#4B773B] via-[#3A6F28] to-[#4A952F] opacity-75">
    <a href="{{route('index')}}"><img src="{{ asset('images/Grocify.png') }}" class="h-[28px]"></a>
    <div id="Search" class=" w-[300px] h-[40px] bg-white border  border-gray-500 justify-center py-1 rounded-xl">
    <span class="font-light px-2">Search</span>
    </div>
    
    <div class="nav-control gap-5 text-gray-950">
        <span class="px-4">Home</span>
       <a href="#about"> <span class="px-4">About</span></a>
        <span class="px-4">Contact</span>
        <a href="{{route('cartindex')}}">
        <span class="px-4">Cart</span>
        {{ session('ProductCount', 0) }}

        </a>
    </div>
    <div class="gap-3 flex flex-row">
    <a href="{{route('login')}}"> <button class="border border-gray-600 px-5  bg-white rounded-lg py-1  h-[40px]">Log In</button></a>
    <a href="{{route('register')}}"><button class="border border-gray-600 px-4  bg-white  rounded-lg py-1  h-[40px]">Register</button></a>
    </div> 

 </nav> 
 <main class="content">
        @yield("content")
    </main>