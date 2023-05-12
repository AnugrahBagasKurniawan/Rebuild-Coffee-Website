<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Login Murid
    public function LoginAdmin () {
        return view('LoginAdmin');
    }

    public function postloginadmin (Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/Pegawai');
        }
        return redirect('/LoginAdmin');   
    }

    //Login Pengguna
    public function LoginPengguna () {
        return view('LoginPengguna');
    }

    public function postloginpengguna (Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/Pengguna');
        }
        return redirect('/LoginPengguna');   
    }
    
    //Logout
    public function logout (Request $request) {
        Auth::logout();
        return redirect('/');
    }

    //Registrasi Pegawai
    public function registrasipegawai(){
        return view('/RegistrasiPegawai');
    }

    public function simpanregistrasipegawai(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => 'Admin',
            'password' => bcrypt($request->password),
        ]);

        return view('/LoginAdmin');
    }

    //Registrasi Pengguna
    public function registrasipengguna(){
        return view('/RegistrasiPengguna');
    }

    public function simpanregistrasipengguna(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => 'pengguna',
            'password' => bcrypt($request->password),
        ]);

        return view('/LoginPengguna');
    }
}
