<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\userAuth\UserRegisterSubmit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('userAuth.user_register');
    }

    public function register_submit(UserRegisterSubmit $request)
    {
        $user                        = new User();
        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->birthday              = $request->birthday;
        $user->gender                = $request->gender;
        $user->password              = Hash::make($request->password);
        $user->role                  = 'User';
        $user->save();
        return back()->with('success','Profile Created Success!');
    }
    public function login()
    {
        return view('userAuth.user_login');
    }
    public function login_submit(Request $request)
    {
        if (User::where('email', $request->email)->exists()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                return 'Welcome';
            } else {
                return back()->with('wrong', 'Wrong Credential!');
            }
        } else {
            return back()->with('exists', 'Email Does not exists!');
        }
    }
}
