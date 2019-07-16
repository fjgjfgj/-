<?php

namespace backend\controllers;

use Yii;
use app\models\StuActivity;
use frontend\models\StuactivitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StuactivityController implements the CRUD actions for StuActivity model.
 */
class StuactivityController extends Controller
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
     * Lists all StuActivity models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StuactivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StuActivity model.
     * @param integer $activity_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($activity_id, $stu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($activity_id, $stu_id),
        ]);
    }

    /**
     * Creates a new StuActivity model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StuActivity();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_id' => $model->activity_id, 'stu_id' => $model->stu_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StuActivity model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $activity_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($activity_id, $stu_id)
    {
        $model = $this->findModel($activity_id, $stu_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_id' => $model->activity_id, 'stu_id' => $model->stu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StuActivity model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $activity_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($activity_id, $stu_id)
    {
        $this->findModel($activity_id, $stu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StuActivity model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $activity_id
     * @param integer $stu_id
     * @return StuActivity the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($activity_id, $stu_id)
    {
        if (($model = StuActivity::findOne(['activity_id' => $activity_id, 'stu_id' => $stu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
