<?php
use \yii\helpers\Html;
use \yii\helpers\ArrayHelper;
use \yii\bootstrap\ActiveForm;

$bases = ArrayHelper::map(\app\models\Recipe\Base::find()->all(), 'id', 'description');
$courses = ArrayHelper::map(\app\models\Recipe\Course::find()->all(), 'id', 'description');
$ethnicities = ArrayHelper::map(\app\models\Recipe\Ethnicity::find()->all(), 'id', 'description');
$difficulties = ArrayHelper::map(\app\models\Recipe\Difficulty::find()->all(), 'id', 'description');
$preperationTimes = ArrayHelper::map(\app\models\Recipe\PreperationTime::find()->all(), 'id', 'description');

$form = ActiveForm::begin(['layout' => 'horizontal']);
?>

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