<?php
/**
 * Captcha.php
 * @author        lu yan hua <838777565@qq.com>
 * @copyright     Copyright (c) 2014-2020 sparui. All rights reserved.
 * @link          http://www.sparui.com
 * @license       http://www.sparui.com/license
 */

namespace Sparui\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

class Captcha extends Facade {

    /**
     * 获取注册组件的名称
     * @return string
     * @author   lu yan hua <838777565@qq.com>
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }

} 