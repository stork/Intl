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

namespace CakeDC\Intl\Utility\Number;


class Decimal
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function format()
    {
        return floatval($this->number);
    }

}