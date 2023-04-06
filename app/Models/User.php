<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Rules\EmailHasUsed;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name", "username", "email", "password", "whatsapp_number"
      ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
  
    User::create($validatedData);    
  
    }
}
