<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public static $testimonial,$image,$imageNewName,$dir,$imgUrl;
    public static function saveInfo($request){
        self::$testimonial = new Testimonial();
        self::$testimonial->name = $request->name;
        self::$testimonial->designation = $request->designation;
        self::$testimonial->description = $request->description;

        if ($request->file('image')){
            self::$testimonial->image = self::saveImage($request);
        }


        self::$testimonial->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/testimonial-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateInfo($request,$id){
        self::$testimonial = Testimonial::find($id);
        self::$testimonial->name = $request->name;
        self::$testimonial->designation = $request->designation;
        self::$testimonial->description = $request->description;
        if($request->file('image')){
            if (self::$testimonial->image){
                if (file_exists(self::$testimonial->image)){
                    unlink(self::$testimonial->image);
                }
            }
            self::$testimonial->image = self::saveImage($request);
        }
        self::$testimonial->save();
    }

}
