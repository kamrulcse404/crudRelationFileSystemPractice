<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::all()
        ]);
    }

    public function create()
    {
        return view('employee.create', [
            'companies' => Company::all()
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'company_id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($request->hasFile('image_path')) {
            $formData['image_path'] = $request->file('image_path')->store('images', 'public');
        }

        Employee::create($formData);

        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();

        return redirect()->back();
    }
}
