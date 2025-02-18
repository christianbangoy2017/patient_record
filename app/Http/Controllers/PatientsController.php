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

    public function store(Request $request) {
        Patients::create([
            'name' => $request->name,
            'address' =>$request->address,
            'contactno' =>$request->contactno,
            'birthdate' =>$request->birthdate,
            'email' =>$request->email

        ]);

        return redirect()->route('home');

    }
}
