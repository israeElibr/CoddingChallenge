<?php
namespace App\Http\Repository;

use App\Models\Category;


class CategoryRepository {
    public function save(Category $category) {
        return $category->save();
    }
    public function findById(int $id) {
        return Category::where('id', $id)->first();
    }
    public function delete(int $id) {
        return Category::destroy($id);
    }
}