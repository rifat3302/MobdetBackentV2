<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function register(Request $request){

        $field  = $request->validate([
            'username' => 'required|string|unique:users,username',
            'name' => 'required|string',
            'surname' => 'required|string',
            'age' => 'nullable',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'username' => $field['username'],
            'name' => $field['name'],
            'surname' => $field['surname'],
            'email' => $field['email'],
            'age' => $field['age'],
            'password' =>  bcrypt($field['password'])

        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
          'user' => $user,
          'token' => $token
        ];

        return response($response,201);

    }

    public function login(Request $request){

        $field  = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('username',$field['username'])->first();

        if(!$user || !Hash::check($field['password'],$user->password)){

           return redirect()->route("login",['param'=>'fail']);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return view('home',$response);

        return response($response,201);

    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Logged Out'
        ];
    }

    public function loginMD(Request $request){

        $field  = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('username',$field['username'])->first();

        if(!$user || !Hash::check($field['password'],$user->password)){
            /* return response([
               'message' => 'Bad creds'
             ],401);*/
            return redirect()->route("login",['param'=>'fail']);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return view('home');

        return response($response,201);

    }

}
