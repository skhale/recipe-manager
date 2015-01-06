<?php
namespace app\models\Recipe;

class Ethnicity extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_ethnicity}}';
	}

	public function getRecipies() {
		return $this->hasMany(\app\models\Recipe::className(), ['ethnicityId' => 'id']);
	}
}