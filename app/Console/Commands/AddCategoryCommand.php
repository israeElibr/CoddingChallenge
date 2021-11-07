<?php

namespace App\Console\Commands;

use App\Http\Service\CategoryService;
use Illuminate\Console\Command;

class AddCategoryCommand extends Command
{
    private CategoryService $categoryService;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AddCategory {name} {parent_id?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new category';

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
    {   $categoryName = $this->argument('name');
        $categoryParentId = $this->argument('parent_id');

        $result = $this->categoryService->addCategory($categoryName, $categoryParentId);
        if($result === false) {

            return Command::FAILURE;
        } 

        return Command::SUCCESS;
    }
}
