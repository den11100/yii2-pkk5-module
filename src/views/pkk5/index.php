<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel muxtor\pkk5module\models\Pkk5kadastrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Получение кадастровых данны';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkk5kadastr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $this->render('_parseForm',['model'=>$model]);
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kadastrnumber',
            'address',
            [
                'attribute'=>'cost',
                'format'=>'raw',
                'value'=>function($model){
                    return $model->cost.' <span class="rubl">&#8399;</span>';
                }
            ],
            [
                'attribute'=>'area',
                'format'=>'raw',
                'value'=>function($model){
                    return $model->area.' м<sup>2</sup';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
