<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function showInfo() {
        $title = "Личный кабинет";

        return view("user.client.personal", compact("title"));
    }
}
