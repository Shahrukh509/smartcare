<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

     protected $fillable = ['category_id','description',
        'name'];


    public function category(){

    return $this->belongsTo(Category::class,'category_id','id');
  }

  public function sub_category_data(){

   return $this->hasMany(SubCategoryData::class,'sub_category_id','id');
  }

  public function hasSubCategoryData(){
   return $this->hasOne(SubCategoryData::class,'sub_category_id','id');
  }

}
