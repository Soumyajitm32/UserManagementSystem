<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function loginAdmin(Request $request){
        $request->validate([
            
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = Admin::where('email', '=', $request->email)->first();
        if($user && $user->id > 0){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginAdmin',$user->id);
                
                
                return redirect('/userView');
    
    
            }
            else{
                return back()->with('fail','Password Not Matches');
    
            }
    
        }
        else{
            return back()->with('fail', 'This Email is Not Registered or not a Admin');
    
        }
    
    }
    public function userEdit(Request $request, $id)
    {
        $admin = User::find($id);

        $data = compact("admin");

        return view("user.userRegistration")->with($data);
    }
    public function userDelete(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->delete();


        return redirect("/userView");
    }
}
