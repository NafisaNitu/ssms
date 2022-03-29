<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function createProfile()
    {
        return view('teacher.profile.create');
    }

    public function newProfile(Request $request)
    {
        Teacher::saveData($request);
        return redirect()->back()->with('message', 'Profile created successfully...');
    }
}
