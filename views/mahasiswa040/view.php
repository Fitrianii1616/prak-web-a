<?php
use yii\widgets\DetailView;
?>

<?=
DetailView::widget([
    'model' => $mahasiswa040,
    'attributes'=> [
        'id040',
        'nim040',
        'nama040',
        'kelas040',
        'status040',
    ],
]);
?>