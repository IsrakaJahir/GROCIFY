@extends('userlayout')

@section('content')

<div class="h-screen flex justify-center items-center">
    <div class="flex flex-row bg-red-600 h-[80%] w-[60%] relative">
        <!-- login -->
        <div class="bg-red-800 w-[50%] flex flex-col items-center justify-center text-white md:w-[400px]">
            <div class="bg-white p-8 rounded-lg shadow-lg w-[90%]  h-[100%] ">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Log in</h2>
                
                <form action="{{route('check')}}" method="POST">
                   
                @csrf
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
                    
                    
                    <!-- Sign Up Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Log in</button>
                    </div>
                </form>
                
                <!-- Already have an account -->
                <p class="text-center text-gray-600 text-sm mt-4">
                    Already have an account? <a href="#" class="text-blue-500 hover:text-blue-700">Log in</a>
                </p>
            </div>

        </div>


        <div id="overlay" class="absolute bg-gray-800 w-[50%] h-[100%] z-20 flex items-center justify-center text-white transition-transform transform">
            Loginooo
        </div>
        <div class="bg-red-100 w-[50%] flex items-center justify-center">

            
        
        </div>
    </div>
</div>

<!-- Button to trigger the animation -->
<div class="flex justify-center mt-5">
    <button onclick="moveOverlay()" class="bg-blue-500 text-white py-2 px-4 rounded">
        Move to Signup
    </button>
</div>

<script>
  function moveOverlay() {
    const overlay = document.getElementById('overlay');

    // Toggle the transform class to move the overlay
    overlay.classList.toggle('translate-x-full');

    // Check if the class 'translate-x-full' is active
    if (overlay.classList.contains('translate-x-full')) {
        // Set the background image when moving to the right
        overlay.style.backgroundImage = "url('images/1.png')";
    } else {
        // Reset the background image when toggling back
        overlay.style.backgroundImage = "";
    }
}


</script>

@endsection