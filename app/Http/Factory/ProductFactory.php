<?php

namespace App\Http\Factory;
 
use App\Models\Category;
use App\Models\Product;

class ProductFactory {

      public function createProduct(string $name, string $description, float $price, string $image, Category $category) {
        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->image = $image;
        $product->category_id =$category->id;

        return $product;
      }
}
