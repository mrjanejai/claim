<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\hosxp\models\HosxpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel-body">
    <div class="col-sm-3">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'vn') ?>
  
    <?= $form->field($model, 'hn') ?>


    <div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>   
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
