<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public static $admission, $image, $imageNewName, $dir, $imgUrl;

    public static function saveAdmission($request){
        self::$admission = new Home();
        self::$admission->s_name= $request->s_name;
        self::$admission->subject= $request->subject;
        self::$admission->s_mail= $request->s_mail;
        self::$admission->s_number= $request->s_number;
        self::$admission->academy= $request->academy;
        self::$admission->s_result= $request->s_result;
        self::$admission->s_address= $request->s_address;
        if ($request->file('image')){
            self::$admission->image = self::saveImage($request);
        }
        self::$admission->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/applicants-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }

}
