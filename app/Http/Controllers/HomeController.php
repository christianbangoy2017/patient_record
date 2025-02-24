<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
       
        $patients = Patients::select('id','name','address','contactno','birthdate','email')->paginate(5);
        return view ('home.index',compact('patients'));
    }

    
}
