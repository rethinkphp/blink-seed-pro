<?php

namespace app\http\apis;

use blink\restapi\BaseApi;

/**
 * Class HelloApi
 *
 * @package app\http\apis
 */
class HelloApi extends BaseApi
{
    public static $op = 'sayHello';
    public static $path = '/';
    public static $verb = 'GET';

    public static function parameters()
    {

    }

    public static function requestBody()
    {

    }

    public static function responses()
    {
        return [
            200 => 'string',
        ];
    }

    public static function permissions()
    {
        return [];
    }

    public function run()
    {
        return 'Hello world, Blink.';
    }
}
