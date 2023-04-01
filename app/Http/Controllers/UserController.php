<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Rules\EmailHasUsed;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
  /** 
   *
   * Insert new Member into database
   * @param Illuminate\Http\Request $request 
   * @return Illuminate\Support\Facades\Redirect
   */
  function insertMember(Request $request)
  {
    // validate Request
    $validated = $request->validate([
      'email' => ['required', 'email', new EmailHasUsed],
      'no_whatsapp' => 'required',
      'nama' => 'required',
      'nama_pengguna' => 'required',
      'kata_sandi' => 'required',
    ]);

    // hashing the password
    $password = Hash::make($validated['kata_sandi']);
    $member = [
      'email' => $validated['email'],
      'whatsapp_number' => $validated['no_whatsapp'],
      'fullname' => $validated['nama'],
      'username' => $validated['nama_pengguna'],
      'password' => $password
    ];

    // insert member
    Member::create($member);
    return Redirect::back();
  }
}
