<?php

namespace App\Http\Controllers\employee;

use Illuminate\Routing\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employees.index', compact('employees'));
    }
}
