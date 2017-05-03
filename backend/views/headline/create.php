<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Headline */

$this->title = 'Create Headline';
$this->params['breadcrumbs'][] = ['label' => 'Headlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
