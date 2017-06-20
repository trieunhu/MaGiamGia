<?php

namespace frontend\modules\Kupon\components\post;
use yii\base\Widget;
use frontend\models\Menu;
use common\models\Banner;
use common\func\StaticDefine;
class PostWidgets extends Widget {


    public function init() {
        // add your logic here
        parent::init();
    }

    public function run() {
        return $this->render('_post');
    }

}
?>

