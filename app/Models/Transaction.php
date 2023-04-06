<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  use HasFactory;
  protected $fillable = [
    'id_product',
    'id_member',
    'subtotal',
    'status',
    'order_id'
  ];

  /**
   * Get Product of this Transaction
   */
  public function product(){
    return $this->hasOne(Product::class,'id','id_product');
  }

  /**
   * Get Member of this Transaction
   */
  public function member(){
    return $this->belongsTo(Member::class,'id','id_member');
  }
}
