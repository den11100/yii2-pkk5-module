<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model muxtor\pkk5module\models\ParseForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'form-parse']); ?>

            <?= $form->field($model, 'kadastr')
                ->textInput(['autofocus' => true])
                ->hint('Введите кадастровые номера через запятую. Например: "69:27:0000022:1306,69:27:0000022:1307"') ?>

            <div class="form-group">
                <?= Html::submitButton('Получить данны', ['class' => 'btn btn-primary', 'name' => 'parse-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>