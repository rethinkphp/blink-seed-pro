<?php

namespace app\http;

use app\http\types\ErrorType;
use blink\restapi\BaseApi as RestBaseApi;

/**
 * Class BaseApi
 *
 * @package app\http
 */
abstract class BaseApi extends RestBaseApi
{
    protected function defaultResponses()
    {
        return [
            400 => ErrorType::class,
            401 => ErrorType::class,
            403 => ErrorType::class,
            404 => ErrorType::class,
            405 => ErrorType::class,
            500 => ErrorType::class,
        ];
    }
}
