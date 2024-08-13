<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private static $testimonial;
    public function index()
    {
        return view('admin.testimonial.manage-testimonial',[
            'testimonials' =>Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.add-testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::saveInfo($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$testimonial =Testimonial::find($id);
        if (self::$testimonial->status == 1){
            self::$testimonial->status = 0;
        }
        else{
            self::$testimonial->status = 1;
        }
        self::$testimonial->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.testimonial.edit-testimonial',[
            'testimonial' =>Testimonial::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::updateInfo($request,$id);
        return redirect(route('testimonials.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$testimonial = Testimonial::find($id);
        if (self::$testimonial->image){
            unlink(self::$testimonial->image);
        }
        self::$testimonial->delete();
        return back();
    }
}
