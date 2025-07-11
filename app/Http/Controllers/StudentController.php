<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

    public function index()
    {
        $title = "Home";
        $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->where('id', '>', 3)->get();
        $users = DB::table('users')->where('id', 1)->first();
        return view('students.students', compact('title', 'posts', 'users'));
    }

    public function student()
    {
        $title = "Students List";
        $name = "Student 1";
        $grade = "Grade 1";
        $address = ["Laguna", "Bulacan"];
        return view('students.students', compact('name', 'grade', 'address', 'title'));
    }

    public function student_addView()
    {
        $title = "Add Student";
        return view('students.student_add', compact('title'));
    }

    public function student_add(Request $request)
    {
        DB::table('posts')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('students.showStudents')->with('success', 'Student added successfully!');
    }

    public function student_edit_form($id)
    {
        $title = "Edit Student";
        $posts = DB::table('posts')->where('id', $id)->first();
        return view('students.student_edit', compact('title', 'posts'));
    }

    public function student_edit(Request $request)
    {
        DB::table('posts')->where('id', $request->input('id'))
            ->update([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'updated_at' => now(),
            ]);
        return redirect()->route('index')->with('success', 'Student updated successfully!');
    }

    public function student_delete($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('index')->with('success', 'Student deleted successfully!');
    }
}
