<?php
/**
 * Copyright 2017, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2017, Cake Development Corporation (http://cakedc.com)
 * @link https://www.cakedc.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
namespace CakeDC\Intl;

use UnexpectedValueException;

class Locale
{
    public static function getDefault()
    {
        return 'cs_CZ';
    }

    public static function getDisplayLanguage($locale, $in_locale = null)
    {
        $locale = self::parseLocale($locale);

        if (isset($locale['language'])) {
            return "Czech";
        }
    }

    public static function parseLocale($locale)
    {
        if ($locale == null) {
            return ['language' => 'cs', 'region' => 'CZ',];
        }
        if ($locale !== 'cs_CZ' && $locale !== 'cs') {
            throw new UnexpectedValueException("This library currently supports Czech, $locale was used.");
        }

        return ['language' => 'cs', 'region' => 'CZ',];
    }
}
