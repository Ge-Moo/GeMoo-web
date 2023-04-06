<?php

namespace App\Models;

use App\Rules\EmailHasUsed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
  use HasFactory;
  protected $fillable = [
    "name", "username", "email", "password", "whatsapp_number"
  ];

  /**
   * Get the Transactions of this Member 
   */
  public function transactions()
  {
    return $this->hasMany(Transaction::class, 'id_member', 'id');
  }

  /**
   * Get the Gifts of this Member 
   */
  public function gifts()
  {
    return $this->hasMany(Gift::class, 'id_member', 'id');
  }

  public function registerMember($request) {
  // validate Request

  $validatedData = $request->validate([
    'name' => "required",
    "username" => "required",
    'email' => ['required', 'email', new EmailHasUsed],
    'password' => 'required',
    'whatsapp_number' => 'required'
  ]);

  // hashing the password
  $validatedData['password'] = Hash::make($validatedData['password']);

  Member::create($validatedData);    

  }
}
