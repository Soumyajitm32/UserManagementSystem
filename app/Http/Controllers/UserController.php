<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;



class UserController extends Controller
{
    function userRegistrationLogic(Request $request){
        $validated = $request->validate(
            [
                "name"=>"required",
                "age"=>"required",
                "gender"=>"required",
                "email"=>"required|email|unique:users,email,NULL,id",
                "contact"=>"required|numeric|digits:10|unique:users",
                "address"=>"required",
                "pin"=>"required|numeric",
                "po"=>"required",
                "district"=>"required",
                "state"=>"required",
                "country"=>"required",
                "dob"=>"required",
                "password"=>"required"
            ]
        );
        if ($request->id > 0) {
            $user = User::find($request->id);
        } else {
            $user = new User();
        }
        $user->name = $request->name;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->pin = $request->pin;
        $user->po = $request->po;
        $user->district = $request->district;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->dob = $request->dob;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect("/userView");
    }
    function userView(){
        $userDetails = User::get();
        
        $data = compact("userDetails");
        return view("user.userView")->with($data);
    }
    public function activateUser($id)
    {
        $user = User::find($id);
        $user->actnum = 1;
        $user->save();
        return redirect()->back()->with('success', 'User activated successfully!');
    }
    public function deactivateUser($id)
{
    $user = User::find($id);
    $user->actnum = 0;
    $user->save();

    return redirect()->back()->with('success', 'User deactivated successfully!');
}
    public function blockUser($id)
{
    $user = User::find($id);
    $user->actnum = 2;
    $user->save();

    return redirect()->back()->with('success', 'User Blocked successfully!');
}
public function loginUser(Request $request){
    $request->validate([
        
        'email'=>'required|email',
        'password'=>'required'
    ]);
    $user = User::where('email', '=', $request->email)->first();
    if($user && $user->actnum == 1){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId',$user->id);
            
            
            return redirect('/userDashboard');

        }
        else{
            return back()->with('fail','Password Not Matches');

        }

    }
    else{
        return back()->with('fail', 'This Email is Not Registered or not activated');

    }

}
public function userDashboard(){
    
    return view("user.userDashboard");
}
}
