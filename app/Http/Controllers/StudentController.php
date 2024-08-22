<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Guest;


class StudentController extends Controller
{
    //
    function getStudentsInfo(){
        $students = \App\Models\Student::all();
        return view('students',['students'=>$students]);
    }

    function getGuestsInfo(){
        $guest=new Guest();
        echo $guest->noOfGuests();
        return \App\Models\Guest::all();
    }
    
}
