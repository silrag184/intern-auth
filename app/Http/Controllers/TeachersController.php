<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $teacher;
    public function index()
    {
        return view('admin.teachers.manage-teacher',[
            'teachers' => Teacher::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.add-teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::saveInfo($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$teacher =Teacher::find($id);
        if (self::$teacher->status == 1){
            self::$teacher->status = 0;
        }
        else{
            self::$teacher->status = 1;
        }
        self::$teacher->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.teachers.edit-teacher',[
            'teacher' =>Teacher::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::updateInfo($request,$id);
        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$teacher = Teacher::find($id);
        if (self::$teacher->image){
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
        return back();
    }
}
