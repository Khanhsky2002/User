<?php

namespace backend\controllers;

use common\models\SanPham;
use common\models\search\SanPhamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SanPhamController implements the CRUD actions for SanPham model.
 */
class SanPhamController extends Controller
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
     * Lists all SanPham models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SanPhamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SanPham model.
     * @param int $SanPhamID San Pham ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SanPhamID)
    {
        return $this->render('view', [
            'model' => $this->findModel($SanPhamID),
        ]);
    }

    /**
     * Creates a new SanPham model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SanPham();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SanPhamID' => $model->SanPhamID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SanPham model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SanPhamID San Pham ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SanPhamID)
    {
        $model = $this->findModel($SanPhamID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SanPhamID' => $model->SanPhamID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SanPham model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SanPhamID San Pham ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SanPhamID)
    {
        $this->findModel($SanPhamID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SanPham model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SanPhamID San Pham ID
     * @return SanPham the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SanPhamID)
    {
        if (($model = SanPham::findOne(['SanPhamID' => $SanPhamID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
