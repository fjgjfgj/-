<?php

namespace frontend\controllers;

use Yii;
use app\models\Hold;
use frontend\models\HoldSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HoldController implements the CRUD actions for Hold model.
 */
class HoldController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Hold models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HoldSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hold model.
     * @param integer $ins_id
     * @param integer $activity_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ins_id, $activity_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($ins_id, $activity_id),
        ]);
    }

    /**
     * Creates a new Hold model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hold();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ins_id' => $model->ins_id, 'activity_id' => $model->activity_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hold model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ins_id
     * @param integer $activity_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ins_id, $activity_id)
    {
        $model = $this->findModel($ins_id, $activity_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ins_id' => $model->ins_id, 'activity_id' => $model->activity_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hold model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ins_id
     * @param integer $activity_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ins_id, $activity_id)
    {
        $this->findModel($ins_id, $activity_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Hold model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ins_id
     * @param integer $activity_id
     * @return Hold the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ins_id, $activity_id)
    {
        if (($model = Hold::findOne(['ins_id' => $ins_id, 'activity_id' => $activity_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
