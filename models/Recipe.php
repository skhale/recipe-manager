<?php
namespace app\models;

class Recipe extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%recipes}}';
	}

	public function rules() {
		return [
			[['userId', 'name', 'description', 'directions', 'servingSize'], 'required'],
			[['userId', 'baseId', 'courseId', 'ethnicityId', 'difficultyId', 'prepTimeId', 'servingSize'], 'integer']
		];
	}

	public function attributeLabels() {
		return [
			'baseId' => 'Base',
			'courseId' => 'Course',
			'ethnicityId' => 'Ethnicity',
			'difficultyId' => 'Difficulty',
			'prepTimeId' => 'Preperation Time'
		];
	}

	public function getAuthor() {
		return $this->hasOne(\app\models\User::className(), ['id' => 'userId']);
	}

	public function getEthnicity() {
		return $this->hasOne(\app\models\Recipe\Ethnicity::className(), ['id' => 'ethnicityId']);
	}

	public function getBase() {
		return $this->hasOne(\app\models\Recipe\Base::className(), ['id' => 'baseId']);
	}

	public function getCourse() {
		return $this->hasOne(\app\models\Recipe\Course::className(), ['id' => 'courseId']);
	}

	public function getDifficulty() {
		return $this->hasOne(\app\models\Recipe\Difficulty::className(), ['id' => 'difficultyId']);
	}

	public function getPreperationTime() {
		return $this->hasOne(\app\models\Recipe\PreperationTime::className(), ['id' => 'prepTimeId']);
	}

	public function getRecipeIngredients() {
		return $this->hasMany(\app\models\Recipe\RecipeIngredient::className(), ['recipeId' => 'id']);
		// try via()
	}
}