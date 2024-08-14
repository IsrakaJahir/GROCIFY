
@extends('userlayout')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-lg w-[90%]  h-[100%] md:w-[400px]">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Sign Up</h2>
        
        <form action="{{ route('pages.user.signup') }}" method="POST">

        @csrf
            <!-- Full Name -->
            <div class="mb-4">
                <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your full name" required>
            </div>
            
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your email" required>
            </div>
            
            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your password" required>
            </div>
            
            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm your password" required>
            </div>
            
            <!-- Sign Up Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Sign Up</button>
            </div>
        </form>
        
        <!-- Already have an account -->
        <p class="text-center text-gray-600 text-sm mt-4">
            Already have an account? <a href="#" class="text-blue-500 hover:text-blue-700">Log in</a>
        </p>
    </div>
    @endsection