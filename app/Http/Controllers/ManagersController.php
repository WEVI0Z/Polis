<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagersController extends Controller
{
    public function showInfo() {
        $title = "Заявки";

        $orders = Order::query()->where("accepted", "=", "0")->get();

        return view("user.manager.orders", compact("title", "orders"));
    }

    public function agree($id) {
        $order = Order::query()->find($id);
        
        $order->update([
            "manager_id" => 2,
            "accepted" => 1,
        ]);

        return redirect()->route("main");
    }

    public function showClients() {
        $title = "Клиенты";

        $orders = Auth::user()->clientOrders()->get();

        return view("user.manager.clients", compact("title", "orders"));
    }
} 
