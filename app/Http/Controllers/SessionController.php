<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //

    function index()
    {
        return view("login/index");
    }

    function login(Request $request) {


        Session::flash('email', $request->email);

        $request->validate([

            'email' => 'required',
            'password' => 'required',


        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'pengguna') {
                return redirect('/sanksi/pemain');
            }
        } else {
            return redirect('/')->withErrors('Email dan Password yang dimasukan tidak valid');
        }


    }

    function logout() {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }


    function register() {
        return view("login/register");
    }

    function create(Request $request) {

        Session::flash('email', $request->email);
        Session::flash('name', $request->name);


        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',


        ], [
            'name' => 'nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan gunakan email yang valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum 6 '
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('admin')->with('success','Berhasil Login');
        } else {
            return redirect('/')->withErrors('Email dan Password yang dimasukan tidak valid');
        }
    }
}
