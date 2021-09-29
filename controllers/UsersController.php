<?php

namespace app\controllers;

use app\models\BackendUser;
use Yii;
use yii\filters\AccessControl;

class UsersController extends \yii\web\Controller
{
    /**
     * @return array[]
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['register'],
                'rules' => [
                    [
                        'allow' => 'true',
                        'roles' => ['?']
                    ]
                ]
            ]
        ];
    }


    public function actionRegister()
    {
//        echo "<pre>"; print_r('Entrando en register'); exit();

        $model = new BackendUser();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->username = $_POST['BackendUser']['username'];
                $model->password = Yii::$app->getSecurity()->generatePasswordHash($_POST['BackendUser']['password']);
                $model->authkey = md5(random_bytes(5));

                if ($model->save()) {
                    return $this->redirect(["site/login"]);
                }
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }
}