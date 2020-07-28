<?php
namespace App\Http\Services;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class CategoryService {

    public function __construct()
    {
    }

    public function getListCategories(){
        return Category::all()->sortByDesc('quantity')->sortByDesc('status')->toArray();
    }

}

