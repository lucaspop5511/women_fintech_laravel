<?php


use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return redirect()->route('members.index');
});

// Resource route for members
Route::resource('members', MemberController::class);