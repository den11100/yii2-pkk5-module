<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model muxtor\pkk5module\models\Pkk5kadastr */

$this->title = 'Create Pkk5kadastr';
$this->params['breadcrumbs'][] = ['label' => 'Pkk5kadastrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkk5kadastr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
