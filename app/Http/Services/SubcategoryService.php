<?php


namespace App\Http\Services;


use App\Models\Subcategory;

class SubcategoryService
{

    public function __construct()
    {
    }


    public function checkNameSubCate($sub_cate){

        $listSubCate = Subcategory::all()->pluck('name')->toArray();
        foreach ($listSubCate as $subCate){
            if(strtolower($subCate) === strtolower($sub_cate)){
                return true;
            }
        }
        return false;
    }

    public function addSubCateForName($sub_cate, $des){
        return Subcategory::create(['name'=>$sub_cate, 'description' => $des]);
    }


    public function getListSubs(){
        return Subcategory::all()->sortByDesc('quantity')->sortByDesc('status')->toArray();
    }

}