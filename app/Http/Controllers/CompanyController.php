<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index', [
            'compaines' => Company::all()
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|unique:companies',
            'address' => 'required',
        ]);

        Company::create($formData);

        return redirect()->route('company.index');
    }

    public function edit($id)
    {
        return view('company.edit', [
            'company' => Company::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $formData = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Company::where('id', $id)->update($formData);

        return redirect()->route('company.index');
    }

    public function destroy($id)
    {
        Company::where('id', $id)->delete();
        
        return redirect()->route('company.index');
    }
}
