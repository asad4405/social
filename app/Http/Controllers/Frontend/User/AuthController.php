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
        $random_id                   = rand(1111111111,9999999999) . User::latest()->first()->id;
        $latest_id                   = User::latest()->first()->id;

        $user                        = new User();
        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->birthday              = $request->birthday;
        $user->gender                = $request->gender;
        $user->unique_id             = $random_id. $latest_id;
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
                $unique_id = User::where('email',$request->email)->first()->unique_id;
                return redirect()->route('user.profile',$unique_id);
            } else {
                return back()->with('wrong', 'Wrong Credential!');
            }
        } else {
            return back()->with('exists', 'Email Does not exists!');
        }
    }
}
