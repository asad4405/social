<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($unique_id)
    {
        $user = User::where('unique_id',$unique_id)->get()->first();
        return view('frontend.user.profile',$user);
    }
}
