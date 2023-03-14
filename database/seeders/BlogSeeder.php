<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog=Blog::all();
        foreach (range(0, 5) as $i){
            $blog=[
                'category_id'=>"1",
                'title'=>"How Travel Makes You More Attractive",
                'image'=>"blog3.png",
                'image1'=>"blog3.png",
                'image2'=>"blog3.png",
                'author_id'=>"1",
                'slug'=>"article1",
                'status'=>"1",
                'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quidem, non obcaecati ipsam blanditiis nesciunt cumque velit alias sint minus porro omnis, doloribus et praesentium dolorem sapiente eaque modi ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse autem dicta sed placeat rerum fuga, officia, qui magnam quam soluta sapiente quae illo blanditiis, necessitatibus numquam odit dolore laudantium quibusdam",
            ];
    
            Blog::create($blog);
        }
        foreach (range(6, 10) as $i){
            $blog=[
                'category_id'=>"2",
                'title'=>"How Art",
                'image'=>"blog3.png",
                'image1'=>"blog3.png",
                'image2'=>"blog3.png",
                'author_id'=>"1",
                'slug'=>"article2",
                'status'=>"1",
                'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quidem, non obcaecati ipsam blanditiis nesciunt cumque velit alias sint minus porro omnis, doloribus et praesentium dolorem sapiente eaque modi ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse autem dicta sed placeat rerum fuga, officia, qui magnam quam soluta sapiente quae illo blanditiis, necessitatibus numquam odit dolore laudantium quibusdam",
            ];
    
            Blog::create($blog);
        }
    }
}
