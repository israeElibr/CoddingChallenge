<?php 
namespace App\Http\Factory;

use App\Models\Category;

class CategoryFactory {
      public function createCategory(string $name, ?Category $parentCategory = null){
        $category = new Category();
        $category->name = $name;
        if($parentCategory !== null){
          $category->parent_id = $parentCategory->id;
        }
        
        return $category;
      }
}