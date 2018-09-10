<?php

namespace App\Exceptions\ApiExceptions;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use App\Exceptions\ApiExceptions\Contracts\ShowsPrevious;
use App\Exceptions\ApiExceptions\Contracts\ShowsTrace;
use Symfony\Component\Debug\Exception\FlattenException;

abstract class ApiException extends IdException implements Jsonable, \JsonSerializable, Arrayable
{
    protected $headers = [];
    protected $statusCode = 500;

    /**
     * @param int        $statusCode
     * @param string     $id
     * @param string     $message
     * @param \Exception $previous
     * @param array      $headers
     */
    public function __construct($statusCode = 0, $id = '', $message = '', \Exception $previous = null, array $headers = [])
    {
        $this->headers = $headers;
        $this->statusCode = $statusCode;

        parent::__construct($id, $message, $previous, $statusCode);
    }

    /**
     * Return headers array.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Return StatusCode.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Convert exception to JSON.
     *
     * @param  int $options
     * @return array
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray());
    }

    /**
     * Convert exception to array.
     *
     * @return array
     */
    public function toArray()
    {
        $e = $this;

        if (env('APP_DEBUG') && $e instanceof ShowsPrevious && $this->getPrevious() !== null) {
            $e = $this->getPrevious();
        }

        $return = [];
        $return['id'] = $e instanceof IdException ? $e->getId() : snake_case(class_basename($e));
        $return['message'] = $e->getMessage();
        $return['status_code'] = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500;

        if ($e instanceof ApiException) {
            $meta = $this->getMeta();
            if (! empty($meta)) {
                $meta = is_array($meta) ? $meta : [$meta];
                $return = array_merge($return, $meta);
            }
        }

        if (env('APP_DEBUG') && $this instanceof ShowsTrace) {
            $return['trace'] = FlattenException::create($e)->getTrace();
        }

        return $return;
    }

    /**
     * Prepare exception for report.
     *
     * @return string
     */
    public function toReport()
    {
        return $this;
    }

    /**
     * Add extra info to the output.
     *
     * @return mixed
     */
    public function getMeta() {}
}
