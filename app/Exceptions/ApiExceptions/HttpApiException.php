<?php
/**
 * Created by PhpStorm.
 * User: Wave
 * Date: 2018/8/7
 * Time: 15:26
 */

namespace App\Exceptions\ApiExceptions;


use App\Exceptions\ApiExceptions\Contracts\DontReport;

class HttpApiException extends ApiException implements DontReport
{
    /**
     * HttpApiException constructor.
     * @param int $statusCode
     * @param string|null $message
     * @param \Exception|null $previous
     * @param array $headers
     * @param int|null $code
     */
    public function __construct(int $statusCode, string $message = null, \Exception $previous = null, array $headers = array(), ?int $code = 0)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;

        parent::__construct($statusCode, 'http_exception', $message, $previous, $headers);
    }
}