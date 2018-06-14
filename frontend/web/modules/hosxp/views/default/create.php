<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model modules\hosxp\models\Hosxp */

$this->title = 'Create Hosxp';
$this->params['breadcrumbs'][] = ['label' => 'Hosxps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosxp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
