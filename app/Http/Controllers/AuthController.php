<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        $users = User::all(); // Assuming you have a User model
        return view('users', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        }
        return redirect()->route('users.index')->with('error', 'User not found');
    }

    public function register()
    {
        return view ('register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register Successful');
    }
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)){
            return redirect('/home')->with('success', 'Login Successful');
        }

        return back()->with('error','login fail');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
