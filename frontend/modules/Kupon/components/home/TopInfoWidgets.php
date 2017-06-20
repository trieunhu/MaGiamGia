<?php

namespace frontend\modules\Kupon\components\home;
use yii\base\Widget;
use frontend\models\Menu;
use common\models\Banner;
use common\func\StaticDefine;
class TopInfoWidgets extends Widget {


    public function init() {
        // add your logic here
        parent::init();
    }

    public function run() {
        return $this->render('top_info');
    }

}
?>

