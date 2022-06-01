<?php

namespace app\controllers;

use app\models\Addition;
use app\models\AdditionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdditionController implements the CRUD actions for Addition model.
 */
class AdditionController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Addition models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdditionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Addition model.
     * @param int $id_a Id A
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_a)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_a),
        ]);
    }

    /**
     * Creates a new Addition model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Addition();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_a' => $model->id_a]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Addition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_a Id A
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_a' => $model->id_a]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Addition model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_a Id A
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id_a)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Addition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_a Id A
     * @return Addition the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_a)
    {
        if (($model = Addition::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
