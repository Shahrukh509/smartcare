<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
class CategoryController extends Controller
{
    public function add(){

     return view('category.add_category');
    }


    public function added(Request $request){

        $validate = $request->validate([
            'nature_id' => 'required',
            'name' => 'required'],[
                'nature_id.required' => 'Please select nature field']);

        // priint_r($request->name);exit;
        $category = Category::create([
            'nature_id' => $request->nature_id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        if(!empty($category)){

            Session::flash('message','Category has been added');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('survey');
        }
        else{
           
           Session::flash('message','Category not added');
            Session::flash('alert-class', 'alert-danger');

            return redirect()->route('survey');

        }
    
    }
}
