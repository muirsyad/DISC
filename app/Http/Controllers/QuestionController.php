<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index(){
        return view('Questions.index',[

        ]);
    }
    public function createQ(){
        return view('Admin.Questions.create');
    }
    public function storeQ(Request $request){
        $formFields = $request->validate([
            'group_id' => 'required',
            'question' => 'required',
            'disc_value' => 'required'
        ]);
        $question = Question::create($formFields);

        return redirect('/admin/index')->with('message', 'Question successfully created.');
    }

    public function showQ(){
        return view('Admin.Questions.show',[
            'Questions' => Question::all(),
        ]);
    }
    public function test(){
        return view('Questions.show',[
            'Groups' => Group::all(),
             'Questions' => Question::all(),

        ]);
    }
}
