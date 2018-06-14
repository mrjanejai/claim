<?php

namespace modules\hosxp\controllers;

use Yii;
use modules\hosxp\models\Hosxp;
use modules\hosxp\models\HosxpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for Hosxp model.
 */
class DefaultController extends Controller
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
     * Lists all Hosxp models.
     * @return mixed
     */
    public function actionSyncHosxp($d1,$d2)
    {
        if($d1<>null and $d2<>null){
        $raw =  \Yii::$app->dbhos->createCommand("SELECT a.an,a.vn,a.hn,CONCAT(p.pname,p.fname,'',p.lname) as fullname,p.cid,a.dchdate as vstdate
        ,a.pdx,a.dx0,a.dx1,a.dx2,a.dx3,a.dx4,a.dx5
        ,a.sex,a.age_y,ptt.pttype,ptt.`name` as pttype_name,ipt.adjrw,a.uc_money,a.paid_money,a.item_money
        FROM an_stat a
        INNER JOIN patient p on p.hn = a.hn
        LEFT JOIN pttype ptt on ptt.pttype = a.pttype
        LEFT JOIN ipt on ipt.an = a.an
        where (a.dchdate is not null or a.dchdate !='') AND a.dchdate BETWEEN '$d1' and '$d2'
        GROUP BY a.an ORDER BY a.an")->queryALL();
        
        Yii::$app->db->createCommand()->batchInsert(
                Hosxp::tableName(), 
        ['an','vn','hn','fullname','cid','vstdate'
        ,'pdx','dx0','dx1','dx2','dx3','dx4','dx5'
        ,'sex','age_y','pttype','pttype_name','adjrw','uc_money','paid_money','item_money'], 
        $raw
        )->execute();
        }

        $searchModel = new HosxpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    
    public function actionIndex()
    {
        $d1=null;
        $d2=null;
        $searchModel = new HosxpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    

    /**
     * Displays a single Hosxp model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Hosxp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hosxp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hosxp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hosxp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Hosxp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hosxp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hosxp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
