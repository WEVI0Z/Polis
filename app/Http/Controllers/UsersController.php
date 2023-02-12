<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function login(Request $request) {
        if($_POST) {
            if(Auth::attempt(["password" => $request->password, "email" => $request->email])) {
                return redirect()->route("main")->with("success", "Авторизация прошла успешно");
            } else {
                return redirect()->back()->with("error", "Некорректный логин или пароль");
            }
        }

        return view("user.login");
    }
    
    public function register(Request $request) {
        if($_POST) {
            $rules = [
                "login" => "required",
                "email" => "required | email | unique:users",
                "password" => "required",
                "tel" => "required | integer",
            ];

            $messages = [
                "login.required" => "Пожалуйста, введите свой логин",
                "email.required" => "Пожалуйста, введите свою почту",
                "email.email" => "Неверный формат почты",
                "email.unique" => "Аккаунт с данной почтой уже существует",
                "password.required" => "Пожалуйста, придумайте пароль",
                "tel.required" => "Пожалуйста, введите свой номер телефона",
                "tel.integer" => "Номер телефона должен состоять только из цифр"
            ];

            Validator::make($request->all(), $rules, $messages)->validate();

            $user = User::create([
                "login" => $request->login,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "tel" => $request->tel
            ]);

            Auth::login($user);

            return redirect()->route("main")->with("succes", "Регистрация прошла успешно");
        }

        return view("user.register");        
    }
    
    public function logout() {
        Auth::logout();

        return redirect()->route("main")->with("success", "Вы успешно вышли из аккаунта");
    }
}
