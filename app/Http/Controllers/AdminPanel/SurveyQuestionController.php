<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SurveyQuestion;
use Session;

class SurveyQuestionController extends Controller
{
    public function add_question(Request $request){

     $id = $request->id;

     // print_r($id);exit;


     return view('survey.add_survey_question',compact('id'));



    }


    public function creating(Request $request){

      try{
      
      $validate = $request->validate([

        'question' => 'required|string',
         'option1' => 'required|string',
         'option2' => 'required|string',
         'option3' => 'required|string',
         'option4' => 'required|string'
       ]);

       $data = SurveyQuestion::create([

        'sub_cat_data_id' => $request->id,
        'question'        => $request->question,
        'option1'         => $request->option1,
        'option2'         => $request->option2,
        'option3'         => $request->option3,
        'option4'         => $request->option4,
      ]);

       if($data){

        Session::flash('message','Question has been added');
        Session::flash('alert-class','alert-success');

        return redirect()->route('survey');

       } else{
          Session::flash('message','Unable to add question');
        Session::flash('alert-class','alert-danger');

        return redirect()->route('survey');
           

       }
     }

     catch (Throwable $e) {
        report($e);
 
        return false;
     }




    }
}
