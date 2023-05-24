<?php
    use app\models\Mahasiswa040;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView

    /** @var yii\web\View $this */
    /** @var yii\web\ActiveDataProvider $dataProvider */

    ?>
    <div class="mahasiswa-040-index">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?- Html::button('Mahasiswa Baru', ['class' -> 'btn btn-primary']) ?>
        </p>

    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'nim',
                'nama',
                'kelas',
                'jurusan',
                'profil040.foto_profil',

                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Mahasiswa040 $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]);
?>