<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blog de Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="two" class="container">
<div class="blognoticia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Noticia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'tituloNoticia',
            'contenidoNoticia:ntext',
            'estado',
            'fechaCreacion',
            'authNoticia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>