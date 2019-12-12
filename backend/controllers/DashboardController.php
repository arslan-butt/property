<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Application timeline controller
 */
class DashboardController extends Controller
{
    public $layout = 'common';

    /**
     * User Dashboard according to roles
     * @return type
     * @author  Arslan Butt <engr.arslanbutt@gmail.com>
     *
     */
    public function actionIndex()
    {
        $this->layout = "@app/views/layouts/dashboard";

        if(Yii::$app->user->can('administrator')){
            return $this->render('dashboard');
        }
        else if(Yii::$app->user->can('regionalManager')){
            return $this->render('_dashboard_rm');
        }
        else{
            return $this->render('dashboard');
        }
    }
}
