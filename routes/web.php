<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [AppController::class, "index"])->name("main");

Route::middleware("guest")->group(function () {
    Route::match(["post", "get"], "login", [UsersController::class, "login"])->name("login");
    Route::match(["post", "get"], "register", [UsersController::class, "register"])->name("register");
});

Route::middleware("user")->group(function () {
    Route::get("logout", [UsersController::class, "logout"])->name("logout");

    Route::middleware("client")->group(function () {
        Route::get("personal", [ClientsController::class, "showInfo"])->name("personal");
        Route::match(["post", "get"], "new", [ClientsController::class, "createOrder"])->name("new-order");
    });

    Route::middleware("manager")->group(function() {
        Route::get("orders", [ManagersController::class, "showInfo"])->name("orders");
        Route::get("clients", [ManagersController::class, "showClients"])->name("clients");
        Route::get("agree/{id}", [ManagersController::class, "agree"])->name("agree");
    });
});

Route::fallback([AppController::class, "getError"])->name("error");