<?php

use app\Http\Controller\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
});
