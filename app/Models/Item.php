<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  use HasFactory;

  protected $table = 'item';
  protected $primaryKey = 'id';
  protected $fillable = ['name', 'quantity', 'category_id'];

  public function category()
  {
    return $this->belongsTo(Category::class, 'id', 'category_id');
  }
}
