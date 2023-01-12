<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all();
        // return view ('user.daftarPengguna', ['usera'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('homepage');
    }
}

//     public function register() {
//         $data['title'] = 'Register';
//         return view ('user/register', $data);
//     }

//     public function register_action(Request $request){
//         $request->validate([
//             'name' => 'required',
//             'username' => 'required|unique:tb_user',
//             'password' => 'required',
//             'password_confirm' => 'required|same:password',
//         ]);

//         $user = new User([
//             'name' => $request->name,
//             'username' => $request->username,
//             'password' => Hash::make($request->password),
//         ]);
//         $user->save();

//         return redirect()->route('login')->with('success', 'Registration success. Please Login!');
//     }

//     public function login(){
//         $data['title'] = 'Login';
//         return view('user/login', $data);
//     }

//     public function login_action(Request $request){
//         $request->validate([
//             'username' => 'required',
//             'password' => 'required',
//         ]);
//         if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
//             $request->session()->regenerate();
//             return redirect()->intended('/');
//         }

//         return back()->withErrors([
//             'password' => 'Wrong username or password',
//         ]);
//     }
//     public function password(){
//         $data['title'] = 'Change Password';
//         return view('user/password', $data);
//     }

//     public function password_action(Request $request){
//         $request->validate([
//             'old_password' => 'required|current_password',
//             'new_password' => 'required|confirmed',
//         ]);
//         $user = User::find(Auth::id());
//         $user->password = Hash::make($request->new_password);
//         $user->save();
//         $request->session()->regenerate();
//         return back()->with('success', 'Password changed!');
//     }

//     public function logout(Request $request){
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect('/');
//     }
// }