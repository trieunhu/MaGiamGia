<?php

namespace frontend\modules\Kupon\components\home;
use yii\base\Widget;
class SidebarWidgets extends Widget {


    public function init() {
        // add your logic here
        parent::init();
    }

    public function run() {
        return $this->render('sidebar');
    }

}
?>

