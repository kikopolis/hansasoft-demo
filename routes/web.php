<?php

use App\Http\Resources\PrescriptionResource;
use App\Models\Prescription;
use Illuminate\Http\Request;
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
Route::prefix('/api')->group(function () {
    Route::get('/', fn() => view('app'));
    Route::get('/prescriptions', fn() => PrescriptionResource::collection(Prescription::paginate(10)));
    Route::get('/prescriptions/{id}', fn($id) => new PrescriptionResource(Prescription::findOrFail($id)));
    Route::post('/id-check', function (Request $request) {
        return response()->json([
            'id' => $request->input('id'),
            'valid' => $request->input('id') === '1234567890',
        ]);
    });
});

Route::get('/{any}', fn() => view('app'))->where('any', '.*');
