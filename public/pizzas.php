
<?php
require_once "../vendor/autoload.php";
require_once "../bordel/debugmode.php";
$pizzaController = new \App\Controller\PizzaController();
$pizzaController->index();
