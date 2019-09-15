<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users as Users;
class UsersController extends Controller
{
    public function showAllUsers() {
        $users = Users::all();
        $userFullName = [];
        foreach ($users as $user) {
            array_push($userFullName, $user->getFullNameAttribute());
        }
//
        return view('users', ['userFullName' => $userFullName, 'users' => $users]);
    }

    public function showUser($id) {
        $user = Users::find($id);
        $userFullName = $user->getFullNameAttribute();
        $userPhone = $user->getPhoneNumber();

        return view('user', ['userFullName' => $userFullName, 'userPhone' => $userPhone, 'userMail' => $user->email]);
    }
}
