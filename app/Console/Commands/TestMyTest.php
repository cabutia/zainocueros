<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/* Temporal */
use \App\Category;
use \App\Subcategory;
/* Temporal */

class TestMyTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'try:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Corre la funcion que se le asigne abajo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        foreach($categories as $category)
        {
          $this->info("Handling category ".$category->name."...");
          $category->slug = str_slug($category->name);
          if($category->save()){
            $this->info("\nGenerated slug ".$category->slug."!\n");
          }
          foreach ($category->subcategory as $subcat){
            $this->info("\tHandling subcategory ".$subcat->name."...");
            $subcat->slug = str_slug($subcat->name);
            if($subcat->save()){
              $this->info("\tGenerated slug ".$subcat->slug."!\n");
            }
          }
        }
    }
}
