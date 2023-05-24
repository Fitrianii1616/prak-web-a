<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveFrom::begin() ?>

<?= $form->field($buku, 'kode_buku') ?>
<?= $form->field($buku, 'judul') ?>
<?= $form->field($buku, 'jml_item') ?>

<?=
    Html::submitButton('save', ['class' => 'btn btn-primary'])
?>

<?php ActiveForm::end() ?>