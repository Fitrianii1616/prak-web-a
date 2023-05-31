<?php
    namespace app\controllers;
    use app\models\Mahasiswa040;
    use yii\data\ActiveDataProvider;
    use Yii;


    class Mahasiswa040Controller extends \yii\web\Controller
    {
        public function actionIndex()
        {
            $query = Mahasiswa040::find();
            $dataProvider = new ActiveDataProvider([
                'query' => $query
            ]);
            return $this->render('index', [
                'dataProvider' => $dataProvider
            ]);
        }
        
        public function actionCreate()
        {
            $mahasiswa040 = new Mahasiswa040;
            $mahasiswa040->nim040 = '60200121040'.rand(10,99);
            $mahasiswa040->nama040 = 'FITRIANI';
            $mahasiswa040->kelas040 = 'A';
            $mahasiswa040->status040 = 'Baru';
            if ($mahasiswa040->save()) {
                Yii::$app->session->setFlash('success','Data Tersimpan');
                return $this->redirect(['index']);
            }
        }

        public function actionUpdate($id)
        {
            $mahasiswa040 = Mahasiswa040::findOne($id);
            if($mahasiswa040!==null){
            $mahasiswa040->kelas040 = 'A';
            $mahasiswa040->status040 = 'Update';
            $mahasiswa040->save();
            yii::$app->session->setFlash('success','Data Terupdate');
            }
            return $this->redirect(['index']);
        }

        public function actionDelete($id)
        {
            $mahasiswa040 = Mahasiswa040::findOne($id);
            if($mahasiswa040->delete()) {
            return $this->redirect(['index']);
            }
            else {
                var_dump($mahasiswa040->getError());
                die();
            }
        }

        public function actionView($id)
        {
            $mahasiswa040 = Mahasiswa040::findOne($id);
            return $this->render('view',['mahasiswa040' => $mahasiswa040]);
        }
    }

?>