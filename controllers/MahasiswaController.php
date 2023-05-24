<?php

namespace app\controllers;
use app\models\Mahasiswa40;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa40::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}