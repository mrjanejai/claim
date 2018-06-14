<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\hosxp\models\Hosxp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosxp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx0')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'หญิง' => 'หญิง', 'ชาย' => 'ชาย', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bday')->textInput() ?>

    <?= $form->field($model, 'age_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjrw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uc_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_money')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
