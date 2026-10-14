<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\OutreachController;

Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', fn() => auth()->check() ? redirect()->route('dashboard') : redirect()->route('login'));
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('leads', LeadController::class)->except(['show']);
    Route::get('/leads-export', [LeadController::class, 'export'])->name('leads.export');
    Route::post('/leads-import', [LeadController::class, 'import'])->name('leads.import');
    Route::resource('campaigns', CampaignController::class)->except(['show']);
    Route::get('/outreach-studio', [OutreachController::class, 'index'])->name('outreach.index');
    Route::get('/follow-ups', [FollowUpController::class, 'index'])->name('followups.index');
    Route::post('/follow-ups', [FollowUpController::class, 'store'])->name('followups.store');
    Route::patch('/follow-ups/{followUp}/complete', [FollowUpController::class, 'complete'])->name('followups.complete');
});
