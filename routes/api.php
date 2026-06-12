<?php

use App\Http\Controllers\API\AmadeusEnterpriseController;
use App\Http\Controllers\API\StockAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Stock-software registration (no auth — server-to-server)
Route::post('/stock-app/register', [StockAppController::class, 'register']);