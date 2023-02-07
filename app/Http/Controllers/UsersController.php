<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request) {
        if($_POST) {

        }

        return view("user.login");
    }
    
    public function register(Request $request) {
        if($_POST) {
            
        }

        return view("user.register");        
    }
    
    public function logout() {
        Auth::logout();

        return redirect("main")->with("succes", "Вы успешно вышли из аккаунта");
    }
}
