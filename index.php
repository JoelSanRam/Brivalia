<?php
require_once 'controller/index_controller.php';

// Ruta del proyecto, cambiala por la ruta que vas a usar
define( 'RUTA_HTTP', 'http://' . $_SERVER['HTTP_HOST'] . '/brivalia/' );

error_reporting(0);
// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    $controller = new index_controller();
    $controller->Index();
} else {

    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'] . '_Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';


    // Instanciamos el controlador
    $controller = new $controller();

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}