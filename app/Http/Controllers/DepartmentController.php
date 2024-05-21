<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        return view('departments.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $department = Department::create($request->all());
        $departments = Department::all();
        return redirect()->route('departments.create')->with(['message' => 'Novo departamento criado!', 'departments' => $departments]);
    }
}
