<?php

namespace App\Exceptions\ApiExceptions;

use Exception;
use App\Exceptions\ApiExceptions\Contracts\DontReport;

class NotFoundApiException extends ApiException implements DontReport
{
    /**
     * @param string $message
     * @param Exception $previous
     */
    public function __construct($message = '', Exception $previous = null)
    {
        if (empty($message)) {
            $message = 'Requested object not found.';
        }

        parent::__construct(404, 'not_found', $message, $previous);
    }
}
