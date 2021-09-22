<?php

namespace app\controllers;

use app\models\Country;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $countries = Country::find()->all();
        echo Country::find()->limit(10)
            ->createCommand()->rawSql;
        exit;

        return $this->render('index', ['countries' => $countries]);
//        $query = Country::find();
//
//        $pagination = new Pagination(
//            [
//                'defaultPageSize'=>5,
//                'totalCount'=> $query->count()
//            ]
//        );
//        $countries = $query->orderBy('name')
//            ->offset($pagination->offset)
//            ->limit($pagination->limit)
//            ->all();
//        return $this->render('index', [
//            'countries' => $countries,
//            'pagination' => $pagination,
//        ]);
    }
}