<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Session;
class SubCategoryController extends Controller
{
  public function add(){

    $data['categories'] = Category::all();


    // print_r('hi');exit;

     return view('sub_category.add_sub_category',$data);
    }


    public function added(Request $request){

        $validate = $request->validate([
            'category_id' => 'required',
            'name' => 'required'],[
                'category_id.required' => 'Please select category field']);

        // priint_r($request->name);exit;
        $sub_category = SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        if(!empty($sub_category)){

            Session::flash('message','Sub category has been added');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('survey');
        }
        else{
           
           Session::flash('message','Sub category not added');
            Session::flash('alert-class', 'alert-danger');

            return redirect()->route('survey');

        }
    
    }
}
