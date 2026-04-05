<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::post('/articles', [ArticleController::class, 'store']);
