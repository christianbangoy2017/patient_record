<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    //
    // public function index()
    // {
    //     return view ('patients.index');
    // }

    
    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => ['required','string','max:255','unique:patients'],
            'address' => ['required','string'],
            'contactno' => ['required','numeric','unique:patients'],
            'birthdate' => ['required','date'],
            'email' => ['required','email']
        ]);

        

        Patients::create([
            'name' => $request->name,
            'address' =>$request->address,
            'contactno' =>$request->contactno,
            'birthdate' =>$request->birthdate,
            'email' =>$request->email

        ]);

        return redirect()->route('home')->with('success', 'Patient Added Successfully');

    }

    public function edit($id)
    {
        // $patients = Patients::find($id);
        // return view('patients.edit',compact('patients'));
        $patient = Patients::find($id);
        return view('patients.edit',compact('patient'));


    }

    public function update(Request $request, $id)
    {
        $patient = Patients::find($id);

        $request->validate([
            'name' => ['required','string','max:255'],
            'address' => ['required','string'],
            'contactno' => ['required','numeric'],
            'birthdate' => ['required','date'],
            'email' => ['required','email']
        ]);

        
        $patient->update([
            'name' => $request->name,
            'address' =>$request->address,
            'contactno' =>$request->contactno,
            'birthdate' =>$request->birthdate,
            'email' =>$request->email

        ]);

        return redirect()->route('home')->with('success', 'Patient Updated Successfully');
    }
    public function search(Request $request)
    {
        // $patients = Patients::select('id', 'name', 'address', 'contactno','birthdate','email')->get();
        $search = $request->search;
        if ($search) {
            $patients = Patients::where('name', 'like', '%' . $search . '%')
                 ->orwhere('address', 'like', '%' . $search . '%')
                 ->orwhere('contactno', 'like', '%' . $search . '%')
                 ->orwhere('email', 'like', '%' . $search . '%')
                ->paginate(5);
        } else {
            $patients = Patients::select('id', 'name', 'address', 'contactno','birthdate','email')->paginate(5);

           
        }
        // dd($search);
        // dd($patients);
        return view('home.index', compact('patients'));


    }

    public function destroy($id)
    {
        $patient = Patients::find($id);
        $patient->delete();
        return redirect()->route('home')->with('success', 'Patient Deleted Successfully');
    }

    




}
