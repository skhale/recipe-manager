<?php
namespace app\controllers;

use \yii\helpers\ArrayHelper;
use \app\models\AddRecipeForm;

class RecipeController extends \yii\web\Controller
{
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    private function loadModel($id) {
        $model = \app\models\Recipe::findOne($id);

        if (is_null($model)) {
            throw new \yii\web\HttpException(404, 'Recipe Not Found');
        }

        return $model;
    }

    public function actionView($id) {
        $recipe = $this->loadModel($id);
        return $this->render('view', ['recipe' => $recipe]);
    }

    public function actionList() {
        $recipes = \app\models\Recipe::find();
        return $this->render('list', ['recipes' => $recipes]);
    }

    public function actionCreate() {
        $model = new \app\models\Recipe;
        $model->userId = 1; /* debugging - remove me */

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['recipe/view/' . $model->id]);
        }

        return $this->render('update', ['model' => $model]);
    }
}