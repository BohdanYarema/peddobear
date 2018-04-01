<?php
/**
 * Created by PhpStorm.
 * User: BobbyZi
 * Date: 09.03.2018
 * Time: 18:27
 */

use yii\helpers\Url;

?>
<?php if ($model !== null):?>
<div class="cookies-bar" #catapult-cookie-bar>
    <div class="cookies-bar-inner">
        <div class="cookies-bar-inner__text">
            <p><?=$model->locale->description?></p>
        </div>
        <div class="cookies-bar-inner__btn">
            <button id="catapultCookie"><?=Yii::t('frontend', 'OK')?></button>
        </div>
    </div>
</div>
<?php endif;?>