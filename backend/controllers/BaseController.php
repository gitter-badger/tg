<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\actions\CreateAction;
use backend\actions\IndexAction;
use backend\actions\UpdateAction;
use backend\actions\DeleteAction;
use backend\actions\ViewAction;
use yii\web\NotFoundHttpException;

abstract class BaseController extends Controller implements BaseControllerInterface
{
    protected $_model;
    protected $_searchModel;

    public function init()
    {
        $this->setModel();
        $this->setSearchModel();
    }

    // Use Standalone Actions
    public function actions()
    {
        return [
            'create' => [ 'class' => CreateAction::className() ],
            'index' => [ 'class' => IndexAction::className() ],
            'update' => [ 'class' => UpdateAction::className() ],
            'delete' => [ 'class' => DeleteAction::className() ],
            'view' => [ 'class' => ViewAction::className() ],
        ];
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function getSearchModel()
    {
        return $this->_searchModel;
    }

    public function findModel($id)
    {
        $m = $this->getModel();
        $class = $m::className();
        if (($model = $class::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    abstract protected function setModel();
    abstract protected function setSearchModel();
}