<?php

use App\Utils\Route;
use App\Controller\HomeController;

Route::get('/', HomeController::index());
