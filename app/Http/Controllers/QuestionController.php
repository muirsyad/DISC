<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Question;
use App\Models\user_asnwer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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
        $users = DB::table('answer')->where('user_id', auth()->user()->id)->count();
        //dd($users);
        if($users >0 ){
            return redirect('/home')->with('error', 'You alrady asnwer the test.');

        }else {

            return view('Questions.show',[
                'Groups' => Group::all(),
                 'Questions' => Question::all(),

            ]);


        }

    }

    public function score(Request $request){
        //dd($request);
        $formFields = $request->validate([
            'user_id' => 'required',
            'Q_1' => 'required',
            'Q_2' =>'required',
            'Q_3' =>'required',
            'Q_4' =>'required',
            'Q_5' =>'required',
            'Q_6' =>'required',
            'Q_7' =>'required',
            'Q_8' =>'required',
        ]);

        //dd($request);
        $varD=$varI=$varS=$varC=0;
        for($i = 1; $i < 9; $i++) {
            $Q='Q_'.$i;
            // if($request->$Q === 'D'){
            //     $varD=$varD+1;
            // }
            // else if($request->$Q === 'I'){
            //     $varI=$varI+1;
            // }
            // else if($request->$Q === 'S'){
            //     $varS=$varS+1;
            // }
            // else if($request->$Q === 'C'){
            //     $varC=$varC+1;
            // }

            switch($request->$Q) {
                case 'D':
                    $varD=$varD+1;
                    break;
                case 'I':
                    $varI=$varI+1;
                    break;
                case 'S':
                    $varS=$varS+1;
                    break;
                case 'C':
                    $varC=$varC+1;
                    break;
            }

        }
        //dd($request);
        // if($request->Q_1 === 'S'){
        //     $varS=1;
        // }
        DB::table('answer')->insert([
            'user_id' => auth()->user()->id,
            'D' => $varD,
            'I' => $varI,
            'S' => $varS,
            'C' => $varC,
        ]);

        //$asnwer = user_asnwer::create($formFields);
        //$value = DB::table('user_asnwers')->where('user_id', auth()->user()->id )->first();


            //dd($value->Q_1);
    //         if($value->Q_1=='S') {
    //             DB::table('user_asnwers')->insert([
    //                 'S_value' => 1
    //             ]);
    //         return redirect('/home')->with('message', 'aswer is S.');
    //     }
    //     else{


    //     return redirect('/home')->with('message', 'Answer has been recorded.');

    // }

    return redirect('/home')->with('message', 'Answer has been recorded.');





    }
}
