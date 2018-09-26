<?php

namespace one25one\mytest\controllers;

use Yii;
use yii\web\Controller;
use one25one\mytest\models\Tests;



class TestController extends Controller
{

    public function actionIndex()
    {
        // регистрируем ресурсы:
        \one25one\mytest\TestsAssetsBundle::register($this->view);


        $datas = Tests::find()->all();

        return $this->render('index',[
            'datas' => $datas
        ]);
    }

}
