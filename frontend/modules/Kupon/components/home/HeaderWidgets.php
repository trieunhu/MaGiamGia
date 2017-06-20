<?php

namespace frontend\modules\Kupon\components\home;
use common\models\Banner;
use yii\base\Widget;
use frontend\models\Menu;
class HeaderWidgets extends Widget {


    public function init() {
        // add your logic here
        parent::init();
    }

    public function run() {
        $logo = Banner::findOne(['position'=>'logo']);
        return $this->render('header',['logo'=>$logo]);
    }

}
?>

