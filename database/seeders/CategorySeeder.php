<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $category = [
            ['id' => 1, 'name'=>'Lifestyle','slug'=>'Lifestyle'],
            ['id' => 2, 'name'=>'Design','slug'=>'design']
        ];
    
        foreach ($category as $item) {
            Category::create($item);}
        }}