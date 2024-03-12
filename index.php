<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include_once 'controllers/ImpiantoController.php';


$app = AppFactory::create();

$app->get('/impianto', 'ImpiantoController:dati');
$app->get('/dispositivi_di_allarme', 'DispositiviDiAllarmeController:dispositivi');

$app->run();

?>
