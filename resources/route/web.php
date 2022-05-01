<?php

use App\Utils\View;

use App\Controller\Pages\HomeController;

echo View::get('/home', HomeController::index());
