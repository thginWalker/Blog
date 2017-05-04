<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Poststatus;
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
                    // 'label'=>'标题'
                ],
                 [
                    'attribute'=>'tags',
                    // 'label'=>'标签'
                ],
                [
                    'attribute'=>'flag',
                    // 'label'=>'类目'
               //     'value'=>'flag.name',    //读出内容

                ],
                [
                    'attribute'=>'special',
                    // 'label'=>'专题'
                ],
                [
                    'attribute'=>'status',
                    // 'label'=>'状态'
                    'value'=>'status0.name',    //读出内容
                    'filter'=>Poststatus::find()   //搜索框上面的下拉框
                            ->select(['name','id'])
                            ->orderBy('position')
                            ->indexBy('id')
                            ->column(),
                ],
                [
                    'attribute'=>'create_time',
                    // 'label'=>'创建时间',
                      'format'=>['date','php:Y-m-d H:i:s'],
                ],
                 [
                    'attribute'=>'update_time',
                    // 'label'=>'修改时间',
                      'format'=>['date','php:Y-m-d H:i:s'],
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
