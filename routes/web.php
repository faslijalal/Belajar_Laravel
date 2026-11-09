<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
});

// Route::get('/icons', function () {
//     $icons = [
//         ['name' => 'Rocket', 'icon' => 'rocket'],
//         ['name' => 'Sparkles', 'icon' => 'sparkles'],
//         ['name' => 'Shield', 'icon' => 'shield'],
//         ['name' => 'Cloud', 'icon' => 'cloud'],
//         ['name' => 'Star', 'icon' => 'star'],
//         ['name' => 'Bolt', 'icon' => 'bolt'],
//     ];

//     return view('icons', ['icons' => $icons]);
// });
