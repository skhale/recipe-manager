<?php
namespace app\models\Recipe;

class PreperationTime extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_prep_time}}';
	}

	public function getRecipies() {
		return $this->hasMany(\app\models\Recipe::className(), ['prepTimeId' => 'id']);
	}
}