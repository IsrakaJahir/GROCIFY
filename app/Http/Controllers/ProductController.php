<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\categories;

class ProductController extends Controller
{
    public function ProductDisplay()
    {
        $products = Product::all(); // Fetch all products from the database

        return view('pages.user.productdisplay', compact('products'));
    }
    public function IndexPage()
    {
        $products = Product::all(); // Fetch all products
        $categories = categories::all(); // Fetch all categories

        return view('index', compact('products', 'categories'));
    }
    public function IndexPageCategories()
    {
       
        $categories = categories::all(); // Fetch all categories

        return view('pages.user.allcategory', compact( 'categories'));
    }
    public function ProductPopular()
    {
        $productproduct = Product::all(); // Fetch all products from the database

        return view('pages.user.productdisplay', compact('products'));
    }
    
    public function show($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by its ID
    
        return view('pages.user.productdetails', compact('product'));
    }
    public function showCategories($id)
{
    $products = Product::where('cat_id', $id)->get(); // Fetch products by category ID
    $category = categories::find($id); // Fetch the category details

    return view('pages.ProductByCatagory', compact('products', 'category'));
}


}

