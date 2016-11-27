<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlognoticiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blognoticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blognoticia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blognoticia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'tituloNoticia',
            'contenidoNoticia:ntext',
            'estado',
            'fechaCreacion',
            // 'authNoticia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
