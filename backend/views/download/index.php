<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DownloadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Downloads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="download-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Download', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'url:url',
            'type',
            'number',
            'time',
            // 'duserid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
