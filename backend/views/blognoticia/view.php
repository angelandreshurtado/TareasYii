<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blognoticia */

$this->title = $model->tituloNoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blognoticia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idNoticia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idNoticia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de que quiere eliminar este Post?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idNoticia',
            'tituloNoticia',
            'contenidoNoticia:ntext',
            'estado',
            'fechaCreacion',
            'authNoticia',
        ],
    ]) ?>

</div>
