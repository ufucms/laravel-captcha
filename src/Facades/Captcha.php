<?php

namespace Ufucms\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ufucms\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
