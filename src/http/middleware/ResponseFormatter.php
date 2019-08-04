<?php

namespace app\http\middleware;

use blink\core\MiddlewareContract;

/**
 * Class ResponseFormatter
 *
 * @package app\http\middleware
 */
class ResponseFormatter implements MiddlewareContract
{
    /**
     * @param \blink\http\Response $response
     */
    public function handle($response)
    {
        if ($response->data instanceof \Throwable) {
            $response->data = $this->formatException($response->data);
            $response->status(500, 'Internal Error');
        } else if (!$response->headers->has('Content-Type')) {
            $response->headers->set('Content-Type', 'application/json');
        }
    }

    protected function formatException(\Throwable $exception)
    {
        return [
            'name' => get_class($exception),
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'trace' => explode("\n", $exception->getTraceAsString()),
        ];
    }
}
