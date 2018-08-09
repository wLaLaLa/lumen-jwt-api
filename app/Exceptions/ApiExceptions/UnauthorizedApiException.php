<?php

namespace App\Exceptions\ApiExceptions;

use Exception;
use App\Exceptions\ApiExceptions\Contracts\DontReport;

class UnauthorizedApiException extends ApiException implements DontReport
{
    /**
     * @param string $message
     * @param Exception $previous
     */
    public function __construct($message = '', Exception $previous = null)
    {
        if (empty($message)) {
            $message = 'Sent credentials are invalid.';
        }

        parent::__construct(401, 'invalid_credentials', $message, $previous);
    }
}
