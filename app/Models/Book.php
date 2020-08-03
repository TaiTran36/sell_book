<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      'publisher_id', 'category_id', 'author_id', 'name', 'price', 'img_path', 'vote', 'publish_year', 'quantity', 'quantity_sold', 'description', 'status'
    ];
}
