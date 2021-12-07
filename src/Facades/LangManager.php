<?php

namespace Webtamizhan\LangManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webtamizhan\LangManager\LangManager
 */
class LangManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lang-manager';
    }
}
