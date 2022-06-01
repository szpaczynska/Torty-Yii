<?php

namespace app\controllers;

use app\models\Cream;
use app\models\CreamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CreamController implements the CRUD actions for Cream model.
 */
class CreamController extends Controller
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
     * Lists all Cream models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CreamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cream model.
     * @param int $id_c Id C
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_c)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_c),
        ]);
    }

    /**
     * Creates a new Cream model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cream();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_c' => $model->id_c]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cream model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_c Id C
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_c)
    {
        $model = $this->findModel($id_c);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_c' => $model->id_c]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cream model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_c Id C
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_c)
    {
        $this->findModel($id_c)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cream model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_c Id C
     * @return Cream the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_c)
    {
        if (($model = Cream::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
