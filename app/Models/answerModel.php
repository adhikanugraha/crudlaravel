<?php
    namespace App\Models;
    use Illuminate\Support\Facades\DB;
    class AnswerModel{
        public static function get_all(){
            $answers = DB::table('answers')->get();
            return $answers;
        }

        public static function save($data){
            $new_answer = DB::table('answers')->insert($data);

            return $new_answer;
        }

        public static function find_by_id($id){
            $answer = DB::table('answers')->where('pertanyaan_id',$id)->get();
            return $answer;
        }
        
    }