<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    $data = $request->except('_token');

    if ($request->hasFile('art')) {
        $file = $request->file('art');
        $path = $file->store('public', 'public');
        $data['art'] = str_replace('public/', '', $path);
    }

    return view('submission', compact('data'));
});

