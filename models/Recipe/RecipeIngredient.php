<?php
namespace app\models\Recipe;

class RecipeIngredient extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_ingredients}}';
	}

	public function getRecipies() {
		return $this->hasOne(\app\models\Recipe::className(), ['recipeId' => 'id']);
	}

	public function getIngredient() {
		return $this->hasOne(\app\models\Ingredient::className(), ['id' => 'ingredientId']);
	}
}