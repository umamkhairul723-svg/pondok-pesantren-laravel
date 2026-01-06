<?php

use Illuminate\Http\Request;

Route::view('/', 'home');
Route::view('/profil', 'profil');
Route::view('/tata-tertib', 'tatib');
Route::view('/daftar', 'daftar');

Route::post('/daftar', function(Request $request){
    session()->put('santri', $request->all());
    return redirect('/hasil');
});

Route::get('/hasil', function(){
    $santri = session('santri');
    return view('hasil', compact('santri'));
});
