<?php

namespace app\http\types;

use rethink\typedphp\types\ProductType;

/**
 * Class ErrorType
 *
 * @package app\http\types
 */
class ErrorType extends ProductType
{
    public static $name = '!string';
    public static $code = '!integer';
    public static $message = '!string';
    public static $trace = ['string'];
}
