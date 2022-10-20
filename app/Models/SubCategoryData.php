<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryData extends Model
{
    use HasFactory;

    protected $table = 'sub_category_data';

    protected $fillable = ['sub_category_id','title','description'];

    

    public function sub_category(){


    return $this->belongsTo(SubCategory::class,'sub_category_id','id');


    }

    public function surveyquestions(){

        return $this->hasMany(SurveyQuestion::class,'sub_cat_data_id','id');
    }

     public function hassurveyquestions(){

        return $this->hasOne(SurveyQuestion::class,'sub_cat_data_id','id');
    }

}
