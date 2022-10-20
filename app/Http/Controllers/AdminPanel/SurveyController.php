<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nature;
use App\Models\SubCategoryData;

class SurveyController extends Controller
{


  public function all(){


    $data =[];
  	$data['all'] = SubCategoryData::get();

    
  
  	return view('survey.get_all',$data);
  	// print_r($data);exit;
  }


  public function adding(){

    return view('survey.add_survey');
  }

  public function added(Request $request){

    print_r('hi');exit;
  }

 
    
}
