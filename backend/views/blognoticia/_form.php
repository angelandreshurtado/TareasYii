<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\controllers\BlognoticiaController;

/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blognoticia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tituloNoticia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenidoNoticia')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList(['0'=>'Borrador', '1'=>'Publicado']) ?>

    <?= $form->field($model, 'fechaCreacion')->textInput(['readonly' => true, 'value' => date('Y-m-d H:i')]) ?>

    <?= $form->field($model, 'authNoticia')->textInput(['maxlength' => true, 'readonly' => true, 'value' => BlognoticiaController::getUsername()]) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
