<?php
namespace app\models\Recipe;

class Base extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_bases}}';
	}

	public function getRecipies() {
		return $this->hasMany(\app\models\Recipe::className(), ['baseId' => 'id']);
	}
}