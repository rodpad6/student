<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentDataController extends Controller
{
    public function showStudents()
    {
        $title = "Student Lists";
        $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->where('id', '>', 3)->get();
        $users = DB::table('users')->where('id', 1)->first();
        return view('students.students', compact('title', 'posts', 'users'));
    }
}
