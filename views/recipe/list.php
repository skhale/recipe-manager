<?php $this->title = 'Recipes' ?>
<div class="page-header">
  <h1>Recipes</h1>
</div>

<ul class="media-list">
	<?php foreach ($recipes->each(25) as $recipe): ?>
		<li class="media">
			<a href="/recipe/view/<?= $recipe->id; ?>" class="media-left">
				<img src="http://placehold.it/64"/>
			</a>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="/recipe/view/<?= $recipe->id; ?>"><?= $recipe->name; ?></a>
				</h4>
				<p><?= $recipe->description; ?></p>
			</div>
		</li>
	<?php endforeach; ?>
</ul>