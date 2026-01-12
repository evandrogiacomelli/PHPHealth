<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

date_default_timezone_set('America/Sao_Paulo');

//var_dump($_GET['path']);

//$path = explode('/', $_GET['path']);

if (isset($_GET['path'])) {
    $path = explode('/', $_GET['path']);
} else {
    echo "caminho não existe"; exit;
}

if (isset($path[0])) { $api = $path[0]; }  else { echo "caminho nao existe" ; exit; }
if (isset($path[1])) { $acao = $path[1]; }  else { $acao = ''; }
if (isset($path[2])) { $param = $path[2]; }  else { $param = ''; }


$method = $_SERVER['REQUEST_METHOD'];

include_once __DIR__ . "/interface/http/patientController.php";
handlePatient($api, $method);

//var_dump($method);
