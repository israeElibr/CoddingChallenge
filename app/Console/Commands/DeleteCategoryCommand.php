<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Service\CategoryService;

class DeleteCategoryCommand extends Command
{
    private CategoryService $categoryService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteCategory {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete category';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CategoryService $categoryService)
    {   
        parent::__construct();
        $this->categoryService = $categoryService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $categoryId = $this->argument('id');
        $result = $this->categoryService->deleteCategory($categoryId);
        if($result === false) {

            return Command::FAILURE;
        } 

        return Command::SUCCESS;
    }
}
