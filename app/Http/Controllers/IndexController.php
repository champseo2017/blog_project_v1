<?php

namespace App\Http\Controllers;

use App\Role;
use App\Model\user\User;
use App\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);

        
    }
    // public function attachUserRole($userId, $role){

    //     $user = User::find($userId);
    //     $roleId = Role::where('name',$role)->first();
    //     return $user;

    // }

    // public function getUserRole($userId){
    //     return User::find($userId)->roles;
    // }

   
    
}
