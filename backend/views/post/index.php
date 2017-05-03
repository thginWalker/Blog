<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                 [
                    'attribute'=>'title',
                    'label'=>'标题'
                ],
                 [
                    'attribute'=>'tags',
                    'label'=>'标签'
                ],
                [
                    'attribute'=>'flag',
                    'label'=>'类目'
                ],
                [
                    'attribute'=>'special',
                    'label'=>'专题'
                ],
                [
                    'attribute'=>'special',
                    'label'=>'专题'
                ],
                [
                    'attribute'=>'create_time',
                    'label'=>'创建时间',
                      'format'=>['date','php:Y-m-d H:i:s'],
                ],
                 [
                    'attribute'=>'update_time',
                    'label'=>'修改时间',
                      'format'=>['date','php:Y-m-d H:i:s'],
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
