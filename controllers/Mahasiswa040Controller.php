<?php
    namespace app\controllers;
    use app\models\Mahasiswa040;
    use yii\data\ActiveDataProvider;
    class Mahasiswa040Controller extends \yii\web\Controller
    {
        public function actionIndex()
        {
            $query = Mahasiswa040::find();
            $dataProvider = new ActiveDataProvider([
                'query' => Mahasiswa040::find()
            ]);
            return $this->render('index', [
                'dataProvider' => $dataProvider
            ]
        );
        }

    }
?>