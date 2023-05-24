<?php
    namespace app\controllers;
    use app\models\Profil040;
    use yii\data\ActiveDataProvider;
    
    class Profil040Controller extends \yii\web\Controller
    {
        public function actionIndex()
        {
            $query = Profil040::find();
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