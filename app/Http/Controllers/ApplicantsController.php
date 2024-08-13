<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{

    public static $admission;
    public function admissionApplicants(Request $request){
        return view('admin.applicants.admission-applicants',[
            'admissions'=>Home::all()
        ]);
    }
    public function deleteApplicants($id){
        self::$admission = Home::find($id);
        self::$admission->delete();
        return back();
    }

}
