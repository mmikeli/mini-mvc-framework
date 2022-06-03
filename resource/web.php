<?php

use App\Controller\HomeController;
use App\Controller\ContatoController;
use App\Core\View;

View::render(HomeController::index(['/', 'GET'], $request));

View::render(ContatoController::index(['/contato', 'GET'], $request));
