<?php

namespace frontend\modules\Kupon\components\page;
use yii\base\Widget;
use frontend\models\Menu;
use common\models\Banner;
use common\func\StaticDefine;
class PostHomeWidgets extends Widget {


    public function init() {
        // add your logic here
        parent::init();
    }

    public function run() {
        return $this->render('list_post_home');
    }

}
?>

