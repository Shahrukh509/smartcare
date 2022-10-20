<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Auth;
// use Validator;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
//use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8'
        ]);

        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()]);       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'success' => true,
                'data' => $user,
                'access_token' => $token,
                 'token_type' => 'Bearer',
                  ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', welcome to home',
                'user_id'=> "$user->id",
                'user_name' => $user->name,
                'email' => $user->email,
                'access_token' => $token, 'token_type' => 'Bearer', ]);
    }


    public function forgot(Request $request) {

         $input = $request->only('email');
        $validator = Validator::make($input, [
        'email' => "required|email"
        ]);
        if ($validator->fails()) {
        return response([
            'errors'=>$validator->errors()->all()
        ], 422);
        }
        $response =  Password::sendResetLink($input);
        if($response == Password::RESET_LINK_SENT){
        $message = "Mail send successfully";
        }else{
        $message = "Email could not be sent to this email address";
        }
       
        $response = ['data'=>'','message' => $message];
        return response($response, 200);

    }


    public function reset(Request $request) {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = hash::make($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(["message" => "Invalid token provided"], 400);
        }

        return response()->json(["message" => "Password has been successfully changed"]);
    }

    // method for user logout and delete token
    public function logout()
    {
       Session::flush();
        
        Auth::logout();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}