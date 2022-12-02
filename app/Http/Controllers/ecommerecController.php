<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;


class ecommerecController extends Controller
{
    public function login(Request $req)
    {
        $user =  User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {
            return "Username or password not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/home');
        }
    }
    public function Ragister(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
    public function myprofile($id,Request $req)
    {
        $users = User::where('id',$id)->get()->toArray();
        // $value=$users[0]['password'];
        // echo"<pre>";
        // print_r($value);
        return view('myprofile',compact('users'));
    }
}
