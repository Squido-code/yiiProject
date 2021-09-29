<?php

namespace app\controllers;

use app\models\Paises;
use Yii;


class PaisesController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $model = new Paises();
        $paises = $model::find()->all();
//       echo \Yii::$app->mycomponent->saludo();


//        Prueba para introducir un pais por código
//        $model -> nombre = "España";
//        $model -> status = 1;
//        $model->save();

//        debug
//        foreach ($paises as $data){
//            echo $data->nombre;
//        }
//        exit;

        return $this->render('index', ['paises' => $paises]);
    }

    public function actionCreate()
    {
//        debug de post
//        var_dump($_POST);
//        exit;

        $model = new Paises();
//      comprobamos si se carga la web con informacion en post acerca del formulario
        if (isset($_POST["Paises"])) {
//          recogemos los parametros en el modelo
            $model->attributes = $_POST["Paises"];
//            guardamos en la base de datos y redirigimos
            if ($model->save()) {
//                alerta para iformar al usuario
                Yii::$app->session->setFlash('succes', 'El pais se ha guardado correctamente');
                $this->redirect(["index"]);
            }
        }
//      cargamos la vista del formulario para crear paises
        return $this->render("create", ["model" => $model]);


    }

    public function actionUpdate($id)
    {
//        Buscamos el pais por id
        $model = Paises::findOne($id);

//      Sí ya esta cargada la info por post, guardamos los atributos
        if ($this->request->isPost) {
            $model->load($this->request->post());
            if ($model->save()) {
                Yii::$app->session->setFlash('succes', 'El pais se ha actualizado correctamente');
                $this->redirect(["index"]);
            }
        }
//        cargamos la vista de update, enviando el pais seleccionado.
        return $this->render("update", ["model" => $model]);
    }
}