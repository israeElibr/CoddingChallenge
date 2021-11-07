<?php

namespace App\Http\Service;

use App\Http\Factory\ProductFactory;
use App\Http\Repository\ProductRepository;
use App\Http\Repository\CategoryRepository;

class ProductService
{

    private ProductFactory $productFactory;
    private ProductRepository $productRepository;
    private CategoryRepository $categoryRepository;


    public function __construct(ProductFactory $productFactory, ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->productFactory = $productFactory;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;

    }

    public function addProduct(string $name, string $description, float $price, string $image, int $category_id)
    {   

            $category = $this->categoryRepository->findById($category_id);
  
            if($category === null) {
                dd("category not exist");
                return false;
             }
       

            $Product = $this->productFactory->createProduct($name, $description, $price, $image, $category);
    
        return $this->productRepository->save($Product);
    }
    public function deleteProduct(int $id) {
        $product = $this->productRepository->findById($id);
        if($product === null) {

            dd("not exist");
        }

       return $this->productRepository->delete($id);
    }
  
}
