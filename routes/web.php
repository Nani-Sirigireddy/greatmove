

<?php
use Illuminate\Support\Facades\Route ;
Route::get('/', function() {
    return view('welcome');
});
Route::get('/donor', function() {
    return view('donor');
});
Route::get('/register', function() {
    return view('register');
});
Route::get('/forgot', function() {
    return view('forgot');
});
Route::get('/find', function() {
    return view('find');
});

