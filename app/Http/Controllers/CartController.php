<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts=cart::all();

        return view('pages.user.cart',compact('carts'))  ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
        {
           
    // Retrieve the product ID from the request
    $productId = $request->input('product_id');
    
    // Find the product by ID
    $product = Product::find($productId);

    if ($product) {
        // Check if the product is already in the cart
        $existingCartItem = Cart::where('pid', $productId)->first();

        if ($existingCartItem) {
            // Update the quantity if the item already exists in the cart
            $existingCartItem->quantity += 1; // or adjust as needed
            $existingCartItem->save();
        } else {
            // Insert a new cart item
            Cart::create([
                'pid' => $product->id,
                'pname' => $product->name,
                'quantity' => 1, // default quantity
                'price' => $product->price,
            ]);
        }
        $ProductCount = cart::count();
        session(['ProductCount' => $ProductCount]);


        // Redirect or return a response
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // If the product is not found
    return redirect()->back()->with('error', 'Product not found.');
    }
    
    /**
     * Display the specified resource.
     */

     public function cartdisplay(){
       $carts=carts::all();
       return view('cartdisplay',compact('carts'))  ;       

     }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function addMovieToCart(Request $request)
    // {
    //     $movieId = $request->input('product_id');
    //     $quantity = $request->input('quantity', 1);
    //     $cartItemId = $request->input('cart_item_id');

    //     $movie = Movie::find($movieId);

    //     if (!$movie) {
    //         return response()->json(['error' => 'Movie not found'], 404);
    //     }

    //     $cart = session()->get('cart', []);

    //     if (isset($cart[$movieId])) {
    //         // Update quantity if product is already in the cart
    //         $cart[$movieId]['quantity'] += $quantity;
    //     } else {
    //         // Add new item to the cart
    //         $cart[$movieId] = [
    //             'id' => $movie->id,
    //             'name' => $movie->name,
    //             'price' => $movie->price,
    //             'quantity' => $quantity,
    //             "poster" => $movie->poster
    //         ];
    //     }

    //     session()->put('cart', $cart);

    //     // Calculate the total quantity
    //     $totalQuantity = 0;
    //     foreach ($cart as $item) {
    //         $totalQuantity += $item['quantity'];
    //     }
    //     return response()->json(['message' => 'Cart updated', 'cartCount' => $totalQuantity], 200);
    // }


}
