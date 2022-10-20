<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Nature;
use Session;
use App\Models\SubCategoryData;
class SubCategoryDataController extends Controller
{
  public function add(){

    $data['nature'] = Nature::all();
    $data['categories'] = Category::all();


    // print_r('hi');exit;

     return view('sub_category_data.add_sub_category_data',$data);
    }



    public function getSubCategories(Request $request){
        
        $data=array();
        if($request->cat_id){

         $data['sub_cat'] = SubCategory::where('category_id',$request->cat_id)->get();
        

        }else{
        $nature_id = $request->id;
        $alldata = Category::where('nature_id',$nature_id)->with('sub_category')->get();
        $data['sub_category'] = SubCategory::get();
        $data['alldata'] = $alldata;

    }


        // echo "<pre>";
        // print(json_encode($data['sub_category']));
        // exit;

        return json_encode($data);
    }


    public function added(Request $request){

        $validate = $request->validate([
            'nature_id' => 'required',
            'category_id' => 'required',
            'title' => 'required'],[
                'category_id.required' => 'Please select category field',
                'nature_id.required' => 'Please select nature field',
            'title.required' => 'Please select Title field']);

        // priint_r($request->name);exit;
        $sub_category_data = SubCategoryData::create([
            'sub_category_id' => $request->sub_category_id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        if(!empty($sub_category_data)){

            Session::flash('message','Survey has been added');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('survey');
        }
        else{
           
           Session::flash('message','Survey not added');
            Session::flash('alert-class', 'alert-danger');

            return redirect()->route('survey');

        }
    }
         public function edit(Request $request){

            $data['edit'] = SubCategoryData::where('id',$request->id)->first();
            // print_r($edit->sub_category->category->name);exit;
             $data['nature'] = Nature::all();
             $data['categories'] = Category::all();
             $data['sub_categories'] = SubCategory::all();

            return view('sub_category_data.edit_sub_category_data', $data);
        }


        public function update(Request $request){
           
          $data = SubCategoryData::where('id',$request->id)->first();

          $data = $data->update([
            'sub_category_id' => $request->sub_category_id]);

          if($data){

            Session::flash('message','data has been updated');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('survey');
          }
          else
          {
             Session::flash('message','unable to update data');
            Session::flash('alert-class', 'alert-danger');

            return redirect()->route('survey');   


          }


        }
    


        public function add_question(){

            return view('sub_category_data.add_question');
        }

         public function delete(){

            return view('sub_category_data.add_question');
        }
    
    
    }

