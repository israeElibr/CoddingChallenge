<?php
namespace App\Http\Repository;

use App\Models\Product;


class ProductRepository {
    public function save(Product $product) {
        return $product->save();
    }
    public function findById(int $id) {
        return Product::where('id', $id)->first();
    }
    public function delete(int $id) {
        return Product::destroy($id);
    }
  
}