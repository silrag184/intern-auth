<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category;

    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }

    public static function updateCategory($request){
        self::$category = Category::find($request->id);
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }

}
