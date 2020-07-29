<?php
namespace App\Http\Services;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;

class CategoryService {

    public function __construct()
    {
    }

    public function getListCategories(){
        return Category::all()->sortByDesc('quantity')->sortByDesc('status')->toArray();
    }

    public function getListSubCategories(){
        return Subcategory::all()->toArray();
    }

}

