<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPasswordController extends Controller
{
    public function show(Request $request){
        return view("auth.update");
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:6',
        ]);
        $user = Auth::user();
        $password = bcrypt($request->password);
        $user->password = $password;
        $user->save();
        return redirect("dashboard");
       
    }
}