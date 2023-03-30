<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  use HasFactory;
  protected $fillable = [
    "fullname", "username", "email", "password", "whatsapp_number"
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
}
