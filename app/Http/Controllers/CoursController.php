<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use app\Http\Request\PostCoursValidator;

class CoursController extends Controller
{
    public function __construct(){


    }

    public function index()
    {

        $cours= Cours ::get();
        return response()->json($cours);
    }

    public function Store(PostCoursValidator $request){
        $data= $request->Validated();
        $cours= Student ::create($data);
        return response()->json($cours);

    }

    public function Update($id,$data){
        $cours = Cours:: find($id);
        $data=['name'=>"mathematique"];
        $cours = Cours ::update($cours->id,$data);

        return $cours;

    }

    public function Delete($id){
        $cours= Cours :: find($id);
        Cours:: delete($cours);

        return true;

    }
}
