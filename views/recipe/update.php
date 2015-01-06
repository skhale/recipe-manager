<?php $this->title = 'Edit Recipe'; ?>
<div class="page-header">
	<h1><?= $this->title; ?></h1>
</div>

<?= $this->render('_recipeForm', ['model' => $model]); ?>