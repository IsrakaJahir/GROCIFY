<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserRegistationController extends Controller
{
    //
    public function create()
    {
        return view('pages.user.signup');
    }
    public function store(Request $request)
    {
       $input = $request->all();
       User::create([
        'name' => $request->input('name'),

        'email' => $input['email'],
        'password' => Hash::make($input['password'])
        
      ]);
      return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
    }
}
