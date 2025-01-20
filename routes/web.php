<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\Test;

Route::resource('articles', ArticleController::class);
