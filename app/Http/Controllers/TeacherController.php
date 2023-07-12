<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Requests\PostTeacherValidator;

class TeacherController extends Controller
{
    public function __construct (){


    }

    public function index(){

        $teachers= Teacher::get();
        return response()->json($teachers);

    }

    public function Store(PostTeacherValidator $request) {

        $data =$request->validated();
        $teacher=Teacher :: create($data);
        return response()->json($teacher);
    }

    public function Update($id,$data){

        $teacher= Teacher:: find($id);
        $data =['complete_name'=>'kabeya kadima lebon','level'=>'licence'];
        $teacher = Teacher:: update($teacher->$id,$data);

        return response()->json($teacher);
    }

    public function Delete($id){
    $teacher = Teacher::find($id);
    Teacher :: delete($teacher);
    return True;

    }
}
