<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Headline */

$this->title = 'Update Headline: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Headlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="headline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
