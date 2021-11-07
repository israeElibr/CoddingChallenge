<?php

namespace App\Http\Service;

use App\Http\Factory\CategoryFactory;
use App\Http\Repository\CategoryRepository;

class CategoryService
{

    private CategoryFactory $categoryFactory;
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryFactory $categoryFactory, CategoryRepository $categoryRepository)
    {
        $this->categoryFactory = $categoryFactory;
        $this->categoryRepository = $categoryRepository;
    }

    public function addCategory(string $name, ?int $parent_id = null)
    {   
        $parentCategory = null;
        if($parent_id !== null) {
          $parentCategory = $this->categoryRepository->findById($parent_id);

          if($parentCategory === null) {
              //ajouter message d'erreur parent_id introuvable
              return false;
           }
        }
        $category = $this->categoryFactory->createCategory($name,$parentCategory);

        return $this->categoryRepository->save($category);
    }
    public function deleteCategory(int $id) {
        $category = $this->categoryRepository->findById($id);
        if($category === null) {

            dd("not exist");
        }

       return $this->categoryRepository->delete($id);
    }
}
