<?php

namespace App\Http\Controllers;


use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    //

    public function create()
    {
        return view('registration');
    }

    public function index()
    {
        
        // return view('index',['users', user::all() ]);
        // dd($users);
        return view('index');
    }


        public function store(Request $request)
    {
   
    $validate=$request->validate(
        [
            'name'=>'required',
            'email' => 'required|unique:users',
            'password'=>'required',

        ]
            
    );

    $validate["password"] = Hash::make($request->password);
    $newUser = User::create($validate);

    return redirect('login');
    }





    public function login()
    {
        return view('login');
    }


    public function authenticate(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth::attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
            // return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
