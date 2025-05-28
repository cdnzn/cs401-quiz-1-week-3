<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Redirected to the games page because there is nothing on the welcome page
    return redirect('/games');
});
Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});
// Step 2. make the routes for the rest of the actions

Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');
Route::delete('/games/{id}', [GamesController::class, 'destroy'])->name('games.destroy');