<?php

/**
 * @var yii\web\View $this
 * @var common\models\Js $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Js'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="js-view">
    <?= $this->render('_form', [ 'model' => $model ]) ?>
</div>
