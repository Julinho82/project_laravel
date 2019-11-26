<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\Api\Users\LoginRequest;
use App\Http\Requests\Api\Users\StoreRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
 


class UserController extends BaseController
{
    //methods
    public function register(StoreRequest $request){

        $request->merge([
            'password'=>bcrypt($request->input('password'))
        ]);
        $user =User::create($request->all());

        return $this->sendResponse($user,'Usuario Creado',201);
        
    }

    public function login(LoginRequest $request){

    }

    public function me(){

    }
}
