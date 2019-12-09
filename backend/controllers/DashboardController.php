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
     * Lists all TimelineEvent models.
     * @return mixed
     */
    public function actionIndex()
    {
    echo "Here will be dashboard";
    }
}
