<?php

namespace one25one\mytest\models;

use Yii;
use yii\db\ActiveRecord;

class Tests extends ActiveRecord{


    public function rules()
    {
        return [
            [['ip'], 'ip'],
            [['comment'], 'required'],
        ];
    }

}