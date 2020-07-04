<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;


class AnswerController extends Controller
{
    //
    public function index($id){
        $answer = AnswerModel::find_by_id($id);
//    dd($answer);
        return view('answer.index', compact('answer'));
    }
   
}
