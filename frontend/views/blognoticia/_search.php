<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlognoticiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blognoticia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'tituloNoticia') ?>

    <?= $form->field($model, 'contenidoNoticia') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?php // echo $form->field($model, 'authNoticia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
