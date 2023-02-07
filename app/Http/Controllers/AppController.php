<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view("app.app");
    }

    public function getError() {
        $title = "Произошла ошибка";

        return view("app.error", compact("title"));
    }
}
