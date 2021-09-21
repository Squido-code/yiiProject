<?php
//El controlador se llama a través de la url como una direccion https://practicas.com/hola/
namespace app\controllers;

use yii\web\Controller;

class HolaController extends Controller
{
//El nombre que le sigue al prefijo action se mapea al ID de la acción. hola/hello
    public function actionHello($message = 'Hello world')
    {
        //Cuando el método render() es llamado en una acción, buscará un archivo PHP llamado views/ControllerID/NombreVista.php.
        return $this->render("hola", ["message" => $message]);
    }

//hola/hola-a-todos
    public function actionHolaATodos()
    {
        return $this->render("hola", ["message" => "Hola a todos"]);
    }
}