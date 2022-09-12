<?php

namespace App\Http\Controllers;

use App\Models\Question as ModelsQuestion;
use Illuminate\Http\Request;

class question extends Controller
{
    //
    public function all(){
        return view('landing');
    }

    public function qst(){
        return view('question',[
            'quest' => ModelsQuestion::all()
        ]);
    }

}
