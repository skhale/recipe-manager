<?php
use \app\helpers\AppHelper;

$this->title = $recipe->name;
?>
<div class="page-header">
  <h1><?= $recipe->name; ?> <small>by <?= $recipe->author->fullName; ?></small></h1>
</div>

<div class="row">
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="http://www.placehold.it/300" alt="Recipe Thumbnail">
		</a>
	</div>
	<div class="col-xs-6 col-md-9">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Information</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3"><strong>Base</strong></div>
					<div class="col-md-9"><?= $recipe->base->description; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"><strong>Course</strong></div>
					<div class="col-md-9"><?= $recipe->course->description; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"><strong>Ethnicity</strong></div>
					<div class="col-md-9"><?= $recipe->ethnicity->description; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"><strong>Difficulty</strong></div>
					<div class="col-md-9"><?= $recipe->difficulty->description; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"><strong>Preperation Time</strong></div>
					<div class="col-md-9"><?= $recipe->preperationTime->description; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"><strong>Number of Servings</strong></div>
					<div class="col-md-9"><?= $recipe->servingSize; ?></div>
				</div>
			</div>
		</div>

		<?php if (!empty($recipe->description)): ?>
			<div class="well"><?= $recipe->description; ?></div>
		<?php endif; ?>

	</div>
</div>

<div class="recipe-view-tabs">
<?php
echo \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Ingredients',
            'content' => $this->render('_ingredientList', ['recipe' => $recipe]),
            'active' => true
        ],
        [
            'label' => 'Directions',
            'content' => AppHelper::textToHtml($recipe->directions, false)
        ]
    ]
]);
?>
</div>