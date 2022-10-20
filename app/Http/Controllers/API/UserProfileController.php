<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
  
  public function profile(Request $request){
   
    $user = User::where('id',$request->id)->first();

    if(empty($user->image)){

       $user->image = env('APP_URL').'/public/user_image/dummy.png';

       $user->save();

    }

    return response([

        'user_id' => $user->id,
        'email' => $user->email,
        'image' => $user->image
    ]);



  }
}
