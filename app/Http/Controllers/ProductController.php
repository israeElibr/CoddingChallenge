<?php

namespace App\Http\Controllers;

use App\Http\Repository\CategoryRepository;
use App\Http\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    private ProductService $productService;
    private CategoryRepository $categoryRepository ;

    public function __construct(ProductService $productService, CategoryRepository $categoryRepository)
    {
        $this->productService=$productService;
        $this->categoryRepository =$categoryRepository ;

    }
    public function saveProduct(Request $request){

     $name=$request->get('name');
     $description=$request->get('description');
     $price=$request->get('price');
     $image=$request->files->get('image');
     $this->productService->addProduct($name, $description, $price, $image, 3);
     return("bien ajouté");
    }

    public function newProduct(){
        return view('AddProduct');
    }
   
}
