<?php

namespace App\Models;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
  use HasFactory;
  protected $fillable = [
    'id_member', 'id_product', 'game_uuid'
  ];

  /*
   * Get member of this Gift
   */
  public function member()
  {
    return $this->belongsTo(Member::class, 'id', 'id_member');
  }

  /**
   * Get Product of this Gift 
   */
  public function product()
  {
    return $this->hasOne(Product::class, 'id', 'id_product');
  }
}
