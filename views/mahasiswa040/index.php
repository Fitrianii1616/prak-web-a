<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\HTML;
?>

<p>
    <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-primary']) ?>
</p>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
            'columns' => [
                    ['class'=>SerialColumn::className()],
                'id040',
                'nim040',
                'nama040',
                'kelas040',
                'status040',
                [
                    'class' => ActionColumn::className(),
                    'template'=> '{view} {update} {delete}',
                ],
            ],
    ]);
?>