<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    //
    public function index(){
        $questions = QuestionModel::get_all();
        // dd($questions);
        return view('question.index' , compact('questions'));
    }

    public function create(){
        return view('question.form');
    }

    public function store(Request $request){
       
        $data = $request->all();
        unset($data["_token"]);
        $question = QuestionModel::save($data);
       
        if($question){
            return redirect('/pertanyaan');
        }
    }
}
