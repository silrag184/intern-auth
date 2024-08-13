<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    private static $blog,$slug,$image,$imageNewName,$dir,$imgUrl;
    public static function saveInfo($request){
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->author_name = $request->author_name;
        self::$blog->description = $request->description;
        self::$blog->image = self::makeImgUrl($request);
        self::$blog->save();
    }
    private static function makeSlug($request){
        if ($request->slug){
            self::$slug = Str::slug($request->slug);
        }else{
            self::$slug = Str::slug($request->title);
        }
        return self::$slug;
    }
    private static function makeImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/blog-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }

    public static function updateInfo($request,$id){
        self::$blog = Blog::find($id);

        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->author_name = $request->author_name;
        self::$blog->description = $request->description;
        if($request->file('image')){
            if(self::$blog->image){
                if (file_exists(self::$blog->image)){
                    unlink(self::$blog->image);

                }
            }
            self::$blog->image = self::makeImgUrl($request);
        }

        self::$blog->save();
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
