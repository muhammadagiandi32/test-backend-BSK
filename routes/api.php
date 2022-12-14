<?php

use App\Http\Controllers\Api\UsersController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data-user', function () {
    // $data = User::groupBy('birth_place')->get();
    $data = DB::table('users')
        ->groupBy('birth_place')
        // ->take(50)
        ->get();
    foreach ($data as $key => $row) :
        $data_user = DB::table('users')
            // ->groupBy('birth_place')
            ->where('birth_place', $row->birth_place)
            ->get();
        $callback[] =
            [
                'birth_place' => $row->birth_place,
                'jumlah_data_user' => count($data_user),
                'users' => $data_user
            ];
    endforeach;
    return $callback;
});

Route::resource('/user', UsersController::class);
