<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;


    protected $fillable = [
        'sub_cat_data_id','question','option1','option2','option3','option4'
    ];


    public function subcategorydata(){

        return $this->belongsTo(SubCategoryData::class,'sub_cat_data_id','id');
    }


    public function usersurveydata(){

        return $this->hasMany(UserSurveyData::class,'survey_question_id','id');
    }


}
