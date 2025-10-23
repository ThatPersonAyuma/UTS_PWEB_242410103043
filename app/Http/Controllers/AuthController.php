<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

class AuthController extends Controller
{
    private $users = [
        [
            'userID' => 1,
            'email' => 'aditya@example.com',
            'password' => 'abcd1234',
            'name' => 'Aditya Bayu Pratama',
        ],
    ];

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Debug input
        // dd($request->all()); 
        foreach ($this->users as $user) {
            if (
                $request->email === $user['email'] &&
                $request->password === $user['password']
            ) {
                session([
                    'userID' => $user["userID"],
                    'isLoggedIn' => true,
                    'user' => $user,
                ]);

                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors(['login' => 'Email atau password salah!']);
    }

    public function dashboard()
    {
        if (!session('isLoggedIn')) {
            return redirect()->route('login');
        }

        return  app(PageController::class)->dashboard();
    }

    public function course()
    {
        if (!session('isLoggedIn')) {
            return redirect()->route('login');
        }

        return  app(PageController::class)->course();
    }

    public function profile()
    {
        if (!session('isLoggedIn')) {
            return redirect()->route('login');
        }

        return app(PageController::class)->profile();
    }

    public function logout()
    {
        session()->flush(); 
        return redirect()->route('login');
    }
}
