<?php

use App\Controller\HomeController;
use App\Controller\ContatoController;
use App\Core\View;

print_r('Executando App/Rotas');
echo '<br>';

View::render(HomeController::index(['/', 'GET'], $request));

View::render(ContatoController::index(['/contato', 'GET'], $request));
