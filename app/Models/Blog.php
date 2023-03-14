<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use \Illuminate\Support\HtmlString;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='blogs';
    
    // public function getShortDescriptionAttribute(){
    //     $description=  Str::limit(strip_tags($this->description), 120, '...');
    //     return $description;

    // }

    public function getProductDescription()
{
    return new HtmlString($this->description);
}

    public function category(){
         return $this->belongsTo(Category::class, 'category_id','id');  
    }  
   
    public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
    }

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');  
   } 
}
