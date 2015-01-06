<?php
use \yii\helpers\Html;
use \yii\bootstrap\ActiveForm;

$this->title = ($model->isNewRecord ? 'Add' : 'Edit') .' Recipe';
?>
<div class="page-header">
  <h1><?= $this->title; ?></h1>
</div>

<?php $form = ActiveForm::begin(['action' => '/recipe/post', 'layout' => 'horizontal']); ?>

<?= Html::activeHiddenInput($model, 'id'); ?>
<?= Html::activeHiddenInput($model, 'userId'); ?>

<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'description'); ?>
<?= $form->field($model, 'baseId')->dropDownList($bases); ?>
<?= $form->field($model, 'courseId')->dropDownList($courses); ?>
<?= $form->field($model, 'ethnicityId')->dropDownList($ethnicities); ?>
<?= $form->field($model, 'difficultyId')->dropDownList($difficulties); ?>
<?= $form->field($model, 'prepTimeId')->dropDownList($preperationTimes); ?>
<?= $form->field($model, 'servingSize'); ?>
<?= $form->field($model, 'directions')->textArea(['rows' => 10]); ?>
<?= Html::submitButton('Submit'); ?>

<?php ActiveForm::end(); ?>