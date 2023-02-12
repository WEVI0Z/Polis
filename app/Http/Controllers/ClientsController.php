<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function showInfo() {
        $title = "Личный кабинет";

        $user = Auth::user();

        $orders = $user->orders()->get();

        return view("user.client.personal", compact("title", "orders", "user"));
    }

    public function createOrder(Request $request) {
        if($_POST) {
            $rules = [
                "type" => "required",
                "expiration" => "required | integer | min:1 | max:90"
            ];

            $messages = [
                "type.required" => "Пожалуйста, выберите тип заявки",
                "expiration.required" => "Пожалуйста, введите срок действия",
                "expiration.integer" => "Срок действия должен быть числом",
                "expiration.min" => "Срок действия не может быть меньше 1 дня",
                "expiration.max" => "Срок действия не может быть больше 90 дней",
            ];

            Validator::make($request->all(), $rules, $messages)->validate();

            Order::create([
                "exp_date" => Carbon::parse(mktime(date("H"), date("i"), date("s"), date("n"), date("d"), date("y")) + 86400*$request->expiration),
                "type" => $request->type,
                "user_id" => Auth::user()->id,
            ]);

            return redirect()->route("personal");
        }

        $title = "Создание заявки";

        return view("user.client.new", compact("title"));
    }
}
