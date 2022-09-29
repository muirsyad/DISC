<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //


    public function create()
    {
        return view('Users.register');
    }
    public function adcreate()
    {
        return view('Admin.register');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'client_id' => 'required',
            'role_id' => 'required'
        ]);
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        //create user
        $user = User::create($formFields);

        //Login
        //auth()->login($user);
        return redirect('/')->with('message', 'Your account has been created successfully');
    }

    public function login()
    {
        return view('Users.login');
    }

    public function adlog()
    {
        return view('Admin.login');
    }
    public function auth(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);



        $user = DB::table('users')->where('email', $formFields['email'])->get();


        foreach ($user as $role) {
            $role = $role->role_id;
        }
        // echo $role;
        // dd($user);




        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            if ($role == 2) {


                return redirect('/home')->with('message', 'Logged in successfully');
            }
            else{
                return redirect('/admin/index')->with('message', 'Logged in successfully');
            }
        }
        return back()->withErrors(['email' => 'Invalid Cerendentials'])->onlyInput();
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have beem logout');
    }

    public function role()
    {

        $id = 1;
        $user = DB::table('users')->where('email', 'mioo@gmail.com')->get();
        foreach ($user as $user) {
            $var = $user->email;
        }
        echo '   value' . $var;


        dd($user);
    }

    public function dashboard(){
        return view('Admin.index');
    }


}
