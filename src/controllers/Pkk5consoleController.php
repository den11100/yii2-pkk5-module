<?php

namespace muxtor\pkk5module\controllers;

use muxtor\pkk5module\models\Pkk5kadastr;
use muxtor\pkk5module\models\ParseForm;
use yii\console\Controller;


/**
 * Pkk5Controller implements the CRUD actions for Pkk5kadastr model.
 */
class Pkk5consoleController extends Controller
{

    public $layout = false;
    /**
     * Lists all Pkk5kadastr models.
     * @return mixed
     */
    public function actionParse($param)
    {
        $model = new ParseForm();
        $model->kadastr = $param;
        $data = $model->parse();

        echo $this->render('parse',['data'=>$data]);
    }

    /**
     * Finds the Pkk5kadastr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pkk5kadastr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pkk5kadastr::findOne($id)) !== null) {
            return $model;
        } else {
            die('The requested page does not exist.');
        }
    }
}
