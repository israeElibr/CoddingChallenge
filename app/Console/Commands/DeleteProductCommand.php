<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Service\ProductService;


class DeleteProductCommand extends Command
{
    private ProductService $productService;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteProduct {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete product';

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
        $productId = $this->argument('id');
        $result = $this->productService->deleteProduct($productId);
        if($result === false) {

            return Command::FAILURE;
        } 

        return Command::SUCCESS;
    }
}
