<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model muxtor\pkk5module\models\Pkk5kadastr */

$this->title = 'Update Pkk5kadastr: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pkk5kadastrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pkk5kadastr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
