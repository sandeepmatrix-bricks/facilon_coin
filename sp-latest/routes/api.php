<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('service-providers', [ApiController::class, 'index']);

Route::get('service-providers/all', [ApiController::class, 'all_show']);

Route::get('service-providers/broker', [ApiController::class, 'broker_show']);
Route::get('service-providers/custodian', [ApiController::class, 'custodian_show']);
Route::get('service-providers/portfolio-manager', [ApiController::class, 'portfolio_manager_show']);
Route::get('service-providers/bank', [ApiController::class, 'bank_show']);
Route::get('service-providers/investment-advisors', [ApiController::class, 'investment_advisors_show']);