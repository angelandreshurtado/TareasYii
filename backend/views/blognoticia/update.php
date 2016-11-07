<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */

$this->title = 'Actualizar: ' . $model->tituloNoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tituloNoticia, 'url' => ['view', 'id' => $model->tituloNoticia]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="blognoticia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
