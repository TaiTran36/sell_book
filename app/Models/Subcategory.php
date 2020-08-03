<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'description', 'status', 'quantity'];

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

}
