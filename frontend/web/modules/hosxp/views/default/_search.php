<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\hosxp\models\HosxpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosxp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'fullname') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'pdx') ?>

    <?php // echo $form->field($model, 'dx0') ?>

    <?php // echo $form->field($model, 'dx1') ?>

    <?php // echo $form->field($model, 'dx2') ?>

    <?php // echo $form->field($model, 'dx3') ?>

    <?php // echo $form->field($model, 'dx4') ?>

    <?php // echo $form->field($model, 'dx5') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'bday') ?>

    <?php // echo $form->field($model, 'age_y') ?>

    <?php // echo $form->field($model, 'pttype') ?>

    <?php // echo $form->field($model, 'pttype_name') ?>

    <?php // echo $form->field($model, 'adjrw') ?>

    <?php // echo $form->field($model, 'uc_money') ?>

    <?php // echo $form->field($model, 'paid_money') ?>

    <?php // echo $form->field($model, 'item_money') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
