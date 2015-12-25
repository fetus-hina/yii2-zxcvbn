<?php
/**
 * @copyright Copyright (C) 2015 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-zxcvbn/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\zxcvbn;

use yii\web\AssetBundle;

class ZxcvbnAsset extends AssetBundle
{
    public $sourcePath = '@bower/zxcvbn/dist';
    public $js = [
        'zxcvbn.js'
    ];
}
