<?php

namespace Foundation\Lib;

class Cache
{

    const TIME_INTERVAL = '1440'; // 22 * 60

    const CACHE_BASE_KEY = 'NEPUTER_';

    const CACHE_MENU_SECTION_KEY  = 'menu-sections';

    const CACHE_SETTINGS_KEY  = 'settings';

    public static function resolveKey($key)
    {
        return self::CACHE_BASE_KEY . $key;
    }

    public static function clear()
    {
        return \Cache::clear();
    }

    public static function forget( $key )
    {
        return \Cache::forget( self::resolveKey( $key ) );
    }

}