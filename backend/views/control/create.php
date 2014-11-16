<?php
/**
 * @var yii\web\View $this
 * @var common\models\Control $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Control',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="css-create">
    <?= $this->render('_form', [ 'model' => $model ]) ?>
</div>