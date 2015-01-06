<?php
namespace app\models\Recipe;

class Course extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipe_courses}}';
	}

	public function getRecipies() {
		return $this->hasMany(\app\models\Recipe::className(), ['courseId' => 'id']);
	}
}