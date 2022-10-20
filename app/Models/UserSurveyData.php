<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSurveyData extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','survey_question_id'];

    public function user(){


        return $this->belongsTo(User::class,'user_id','id');
    }

    public function surveyquestion(){

        return $this->belongsTo(SurveyQuestion::class,'survey_question_id','id');
    }
}
