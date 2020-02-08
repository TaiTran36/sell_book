<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    //
    protected $fillable = [
        'name', 'created_by', 'updated_by','description',
    ];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
