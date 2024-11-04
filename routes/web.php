<?php

use App\Http\Controllers\Principal;
use Illuminate\Support\Facades\Route;

Route::get('/', [Principal::class,'index']);
