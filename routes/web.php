<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Welcome\WelcomeController;
use App\Http\Controllers\Web\Participant\ParticipantController;
use App\Http\Controllers\Web\Lottery\LotteryController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/municipios/{id}', [WelcomeController::class, 'getMunicipios'])->name('municipios.byDepartamento');
Route::post('/registrar/participante', [ParticipantController::class, 'store'])->name('participants.store');

// Dashboard routes (protected by 'auth' middleware)
Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Dashboard home (requires verified email)
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Lottery routes
    Route::prefix('loterias')->group(function () {
        // List all lotteries
        Route::get('/', [LotteryController::class, 'index'])->name('lotteries.index');
        // Create lottery
        Route::get('/crear', [LotteryController::class, 'create'])->name('lotteries.create');
        Route::post('/crear', [LotteryController::class, 'store'])->name('lotteries.store');
        // Edit and update a lottery
        Route::get('/{id}/editar', [LotteryController::class, 'edit'])->name('lotteries.edit');
        Route::put('/{id}/editar', [LotteryController::class, 'update'])->name('lotteries.update');
        // Lottery participants
        Route::get('/{id}/participantes', [LotteryController::class, 'participants'])->name('lotteries.participants');
        Route::get('/{id}/participantes/descargar', [LotteryController::class, 'downloadParticipants'])->name('lotteries.participants.download');
        // Download all participants
        Route::get('/participantes/descargar', [ParticipantController::class, 'downloadAllParticipants'])->name('lotteries.participants.download.all');
        // Lottery draw and winners
        Route::get('/{id}/sorteo', [LotteryController::class, 'setWinner'])->name('lotteries.sorteo');
        Route::get('/{id}/{winner_id}', [LotteryController::class, 'winner'])->name('lottery.winner');
        Route::get('/get/winners/{id}', [LotteryController::class, 'getWinners'])->name('get.winners');
        // Toggle lottery status
        Route::post('/loterias/estado', [LotteryController::class, 'setStatus'])->name('lotteries.toggle');
    });

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
