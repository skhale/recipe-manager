<table class="table table-striped">
	<?php foreach ($recipe->recipeIngredients as $ingredient): ?>
		<tr>
			<td>
				<?= $ingredient->quantity; ?>
				<?= $ingredient->ingredient->unit->description; ?>
			</td>
			<td>
				<?= ucfirst($ingredient->ingredient->name); ?>
				<?php if ($ingredient->optional): ?>(optional)<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>