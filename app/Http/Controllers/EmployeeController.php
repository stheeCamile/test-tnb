<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'cpf' => 'required|string|max:14|unique:employees,cpf',
            'age' => 'required|integer|min:18',
            'department_id' => 'required|exists:departments,id',
        ]);

        $employee = Employee::create($validatedData);

        return redirect()->route('employees.show', $employee);
    }
    public function show(Employee $employee)
    {
        $employees = Employee::all();
        return view('employees.show', compact('employees'));
    }
}
