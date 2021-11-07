<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Service\ProductService;

class AddProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AddProduct {name} {description} {price} {image} {category_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new product';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {   
        parent::__construct();
        $this->productService = $productService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $productName = $this->argument('name');
        $productDescription = $this->argument('description');
        $productPrice = $this->argument('price');
        $productImage = $this->argument('image');
        $productCategoryId = $this->argument('category_id');


        $result = $this->productService->addProduct($productName, $productDescription, $productPrice, $productImage, $productCategoryId) ;
        if($result === false) {

            return Command::FAILURE;
        } 

        return Command::SUCCESS;
    }
}
