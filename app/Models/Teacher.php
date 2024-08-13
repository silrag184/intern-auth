<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class Teacher extends Model
{
    use HasFactory;

    public static $teacher,$slug,$image,$imageNewName,$dir,$imgUrl;
    public static function saveInfo($request){
        self::$teacher = new Teacher();
        self::$teacher->t_name = $request->t_name;
        self::$teacher->t_designation = $request->t_designation;
        self::$teacher->t_slug = self::makeSlug($request);
        self::$teacher->t_description = $request->t_description;
        if ($request->file('image')){
            self::$teacher->image = self::saveImage($request);
        }

        self::$teacher->save();

    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/teacher-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }

    private static function makeSlug($request){
        if ($request->t_slug){
            self::$slug = Str::slug($request->t_slug);
        }else{
            self::$slug = Str::slug($request->t_name);
        }
        return self::$slug;
    }

    public static function updateInfo($request,$id){
        self::$teacher = Teacher::find($id);
        self::$teacher->t_name = $request->t_name;
        self::$teacher->t_designation = $request->t_designation;
        self::$teacher->t_slug = self::makeSlug($request);
        self::$teacher->t_description = $request->t_description;
        if($request->file('image')){
            if (self::$teacher->image){
                if (file_exists(self::$teacher->image)){
                    unlink(self::$teacher->image);
                }
            }
            self::$teacher->image = self::saveImage($request);
        }
        self::$teacher->save();
    }
}
