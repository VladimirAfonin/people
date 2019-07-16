<?php

namespace frontend\controllers;

use frontend\models\Widgets;
use yii\rest\ActiveController;

class WidgetsController extends ActiveController
{
    public $modelClass = Widgets::class;
}