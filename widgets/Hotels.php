<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Hotels extends Widget
{
    public function run()
    {
        return $this->render('hotels');
    }
}