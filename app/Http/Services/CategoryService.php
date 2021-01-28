<?php
namespace App\Http\Services;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;
use Exception;
use DB;

class CategoryService {

    public function __construct()
    {
    }

    public function getListCategories(){
        return Category::all()->where('is_delete', 0)->sortByDesc('quantity')->sortByDesc('status')->toArray();
    }

    public function getListSubCategories(){
        return Subcategory::all()->toArray();
    }

    public function checkExistCate($cate_name){
        $listCate = Category::all()->where('is_delete', 0)->pluck('name')->toArray();
        foreach ($listCate as $cate){
            if(strtolower($cate) === strtolower($cate_name)){
                return true;
            }
        }
        return false;

    }

    public function addCateForName($name_cate, $description,  $listId){
        DB::beginTransaction();
        try{
            $result = Category::create(['name' => $name_cate, 'description' => $description]);
            $convertToInt = $this->convertArrayTypeToInt(json_decode($listId, true));
            $addSubs = $result->subcategories()->attach(json_decode($listId, true));
            DB::commit();

        }catch(Exception $e){
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function convertArrayTypeToInt($array){
        foreach ($array as &$a){
            $a = (int)$a;
        }
        return $array;
    }

    public function getCategory($id){

        $category = Category::where('id', $id)->where('is_delete', 0)->with('subcategories')->first()->toArray();

        return $category;
    }

    public function removeCate($id){
        return Category::where('id', $id)->update(['is_delete' => 1]);
    }

    public function activeCate($id, $status){
        return Category::where('id', $id)->update(['status' => $status ? 0 : 1]);
    }

}

