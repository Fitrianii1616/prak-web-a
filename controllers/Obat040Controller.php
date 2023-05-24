<?php
    namespace app\controllers;
    use app\models\Obat040;
    use yii\data\ActiveDataProvider;
    
    class Obat040Controller extends \yii\web\Controller
    {
        public function actionIndex()
        {
            $query = Obat040::find();
            $dataProvider = new ActiveDataProvider([
                'query' => $query
            ]);
            return $this->render('index', [
                'dataProvider' => $dataProvider
            ]
        );
        }

    }
?>