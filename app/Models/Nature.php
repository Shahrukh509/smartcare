<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    use HasFactory;

    protected $table = 'natures';

    protected $fillable=[
        'name'];


  public function categories(){

    return $this->hasMany(Category::class, 'nature_id', 'id');
  }

  public function hasCategory()
  {
      return $this->hasOne(Category::class,'nature_id','id');
  }


  public function sub_category(){

    return $this->hasManyThrough(SubCategory::class,Category::class,'nature_id','category_id');
  }
}
