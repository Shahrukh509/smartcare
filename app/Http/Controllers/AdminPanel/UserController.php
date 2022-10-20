<?php
namespace App\Http\Controllers\AdminPanel;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use Session;
    class UserController extends Controller
    {
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
    $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function all_users()
    {
    $data['users'] = User::where('user_type','!=','1')->orderBy('id','desc')->paginate(10);
    // print_r($data);exit;
    return view('users.get_all', $data);
    }

    public function add_user()
    {
    return view('users.add_user');
    }

    public function adding_user(Request $request){

    // print_r($request->user_status);exit;

    $validated = $request->validate([
    'email' => 'required|email|unique:users',
    'password' => 'required|string|min:8',
    ]);
    $data = User::create([
    'name' => $request['name'],
    'email' => $request['email'],
    'password' => Hash::make($request['password']),
    'user_type' => 2,
    'user_status' => $request->user_status,
    ]);

    if(!empty($data)){

    Session::flash('message', 'User has been added!'); 
    Session::flash('alert-class', 'alert-success');

    return redirect()->route('users');

    }

    else{

    Session::flash('message', 'Unable to add user'); 
    Session::flash('alert-class', 'alert-danger');

    return redirect()->route('users'); 

    }

    }

    public function edit($id){
    $data['data'] = User::find($id);
    return view('users.edit_user',$data);

    }

    public function update(Request $request ,$id){

    $old_email = User::where('id',$id)->pluck('email');
     $data = User::find($id);


    // print_r($old_email[0]);exit;

    if($old_email[0] === $request->email){
        $request->validate([
            'user_status' => 'required',
            'name' => 'required|string'
        ]);

         $data->name = $request->name;
     
        $data->email = $request->email;
        $data->user_status = $request->user_status;
        $data->save();
    }

     else{
     $validate = $request->validate([
        'email' => 'required| unique:users|email',
        'name' => 'required|string',
        'user_status' => 'required',
    ]);
  

   

    $data->name = $request->name;
    $data->email = $request->email;
    $data->user_status = $request->user_status;
    $data->save();
   }

    if($data){
      Session::flash('message','Data has been updated');
      Session::flash('alert-class','alert-success');

    return redirect()->route('users');


    }
    else{

     Session::flash('message','Data not updated');
    Session::flash('alert-class','alert-danger');
    return redirect()->route('users');

    }
    }


    public function delete($id){
    $data = User::find($id);

    $data->delete();

    if($data){
    Session::flash('message','Data has been deleted');
    Session::flash('alert-class','alert-danger');

    return redirect()->route('users');

    }

    else{
    Session::flash('message','Data not deleted');
    Session::flash('alert-class','alert-danger');

    return redirect()->route('users');

    }
    }
    }
