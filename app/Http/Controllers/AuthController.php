<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  public function register(){
    return view('auth.register');
  }
    
  public function store(Request $request)
  {
    $member = new User;
    $member->registerMember($request);
  }
  public function login () {
    return view('auth.login');
  }
  public function authenticate (Request $request) {
    $credential = [
      "email" => $request->email,
      "password" => $request->password
    ];

    if(Auth::attempt($credential)){
        return redirect("/");
    }

    throw ValidationException::withMessages([
        "error" => "Login Failed"
    ]);
  }
}
