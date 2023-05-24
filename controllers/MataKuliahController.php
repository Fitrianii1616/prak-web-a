<?php

namespace app\controllers;
use app\models\Matakuliah40;
use yii\data\ActiveDataProvider;

class MatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Matakuliah40::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}