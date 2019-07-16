<?php

namespace frontend\controllers;

use Yii;
use app\models\StuLecture;
use frontend\models\StulectureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StulectureController implements the CRUD actions for StuLecture model.
 */
class StulectureController extends Controller
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
     * Lists all StuLecture models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StulectureSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StuLecture model.
     * @param integer $lecture_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($lecture_id, $stu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($lecture_id, $stu_id),
        ]);
    }

    /**
     * Creates a new StuLecture model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StuLecture();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'lecture_id' => $model->lecture_id, 'stu_id' => $model->stu_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StuLecture model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $lecture_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($lecture_id, $stu_id)
    {
        $model = $this->findModel($lecture_id, $stu_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'lecture_id' => $model->lecture_id, 'stu_id' => $model->stu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StuLecture model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $lecture_id
     * @param integer $stu_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($lecture_id, $stu_id)
    {
        $this->findModel($lecture_id, $stu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StuLecture model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $lecture_id
     * @param integer $stu_id
     * @return StuLecture the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($lecture_id, $stu_id)
    {
        if (($model = StuLecture::findOne(['lecture_id' => $lecture_id, 'stu_id' => $stu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
