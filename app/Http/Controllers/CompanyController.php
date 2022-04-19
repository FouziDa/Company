<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function add()
    {
        return view('company.add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'unique:companies',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $com = new Company();
        $com->name = $request->input('name');
        $com->email = $request->input('email');
        $com->website = $request->input('web');

        if ($request->hasFile('logo')) {
            $logo = $request['logo']->getClientOriginalName();
            $request->file('logo')->move('storage/logos',$logo);
            $com->logo = $logo;
        }
        $com->save();
        return redirect()->to('/home');
    }
    public function update($id)
    {
        $com = Company::find($id);
        return view('company.update' , ['com' => $com]);
    }

    public function save(Request $request , $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'unique:companies,email,'.$id,
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $com = Company::find($id);
        $com->name = $request->input('name');
        $com->email = $request->input('email');
        $com->website = $request->input('web');

        if ($request->hasFile('logo')) {
            $logo = $request['logo']->getClientOriginalName();
            $request->file('logo')->move('storage/logos',$logo);
            $com->logo = $logo;
        }
        $com->save();
        return redirect()->to('/home');
    }

    public function delete($id)
    {
        $com = Company::find($id);
        $com->delete();
        return redirect()->to('/home');
    }
}
