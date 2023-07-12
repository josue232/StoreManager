<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\PostStudentValidator;

class StudentController extends Controller
{
    
    public function __construct(){


    }

    public function index(){

        $students = Student::get();

        return response()-datajson($students);

    }

    public function store(PostStudentValidator $request){

        $data = $request->validated();

        $student = Student::create($data);

        return response()->json($student);



    }

    public function update($id,$data){

        $student = Student::find($id);

        $data = ['code'=>"122323",'name'=>'zaccaheus','lastname'=>'Zac','sexe'=>'Homme','birthdate'=>'11/11/1111','lieu_naissance'=>'Machin'];

        $student = Student::update($student->id,$data);

        return response()->json($student);

    }

    public function delete($id){

        $student = Student::find($id);
        Student::delete($student);
        return true;
    }
}
