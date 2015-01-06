<?php
namespace app\models\Recipe;

class Difficulty extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_difficulty}}';
	}

	public function getRecipies() {
		return $this->hasMany(\app\models\Recipe::className(), ['difficultyId' => 'id']);
	}
}