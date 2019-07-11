<?php

namespace frontend\controllers;

use frontend\models\UserInfo;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = UserInfo::class;
}