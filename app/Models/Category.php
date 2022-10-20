<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';


    protected $fillable = ['nature_id','description',
        'name'];


   public function nature(){

      return $this->belongsTo(Nature::class);
  }


  public function sub_category(){

    return $this->hasMany(SubCategory::class,'category_id','id');
  }

  public function hasSubCategory(){
    return $this->hasOne(SubCategory::class,'category_id','id');
  }

}
