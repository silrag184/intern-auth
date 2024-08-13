<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Home;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static $admission;
    public function index(){
        return view('front-end.home.home',[
            'blogs'=>Blog::all(),
            'testimonials'=>Testimonial::all(),
            'teachers' => Teacher::where('status',1)->get()
        ]);
    }
    public function about(){
        return view('front-end.home.about',[
            'teachers' => Teacher::where('status',1)->get()
        ]);
    }
    public function service(){
        return view('front-end.home.service');
    }
    public function contact(){
        return view('front-end.home.contact');
    }
    public function project(){
        return view('front-end.home.project');
    }
    public function blog(){
        return view('front-end.home.blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function team(){
        return view('front-end.home.team',[
            'teachers' => Teacher::all()
        ]);
    }
    public function singleBlog($slug){
        return view('front-end.home.single-blog',[
            'blog'=>Blog::where('slug',$slug)->first()
        ]);
    }
    public function categoryWiseBlog($categoryId){
        return view('front-end.home.category-wise-blog',[
            'blogs'=>Blog::where('category_id',$categoryId)->get()
        ]);
    }
    public function admissionEligibility(){
        return view('front-end.home.admission-eligibility');
    }
    public function saveAdmission(Request $request){
        Home::saveAdmission($request);
        return back();
    }
    public function architecture(){
        return view('front-end.section.architecture');
    }
    public function electrical(){
        return view('front-end.section.electrical');
    }
    public function computer(){
        return view('front-end.section.computer');
    }
    public function civil(){
        return view('front-end.section.civil');
    }
    public function tuitionFee(){
        return view('front-end.tuition_fee.tuition-fee');
    }
    public function admissionProcess(){
        return view('front-end.admission_process.admission-process');
    }
    public function scholarShip(){
        return view('front-end.scholarship.scholarship');
    }
    public function pcIst(){
        return view('front-end.clubs.pcist');
    }
    public function ecrcIst(){
        return view('front-end.clubs.ecrcist');
    }
    public function liBrary(){
        return view('front-end.library.library');
    }
    public function campusLife(){
        return view('front-end.students-at-campus.campus_life');
    }


}
