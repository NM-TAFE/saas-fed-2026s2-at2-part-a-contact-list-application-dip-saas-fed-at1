<?php

declare(strict_types=1);

use App\Http\Controllers\Client\ContactController;
use Illuminate\Support\Facades\Route;

Route::get("/contacts", [ContactController::class, "index"]);
Route::get("/contacts/create", [ContactController::class, "create"]);
Route::get("/contacts/{contact}", [ContactController::class, "show"]);
Route::get("/contacts/{contact}/edit", [ContactController::class, "edit"]);
