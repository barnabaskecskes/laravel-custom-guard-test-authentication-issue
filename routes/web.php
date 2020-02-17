<?php

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function (Request $request) {
    return view('welcome', [
        'user' => $request->user(),
    ]);
})->name('test');

Route::get('login', function () {
    Auth::guard('admin')->login(Admin::first());
    return redirect()->route('test');
});
