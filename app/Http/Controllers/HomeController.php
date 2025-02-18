<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        // $patients = Patients::All();
        $patients = Patients::select('name','address','contactno','birthdate','email')->get();
        return view ('home.index',compact('patients'));
    }
}
