<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * 错误返回
     * @param $message
     * @param $error_code
     * @param array $extra
     * @param int $status_code
     * @return mixed
     */
    public function error($message, $error_code = 400, $extra = [], $status_code = 422)
    {
        $arr['id'] = 'http_exception';
        $arr['message'] = $message;
        if ($error_code === 400) {
            $arr['status_code'] = 400;
            $status_code = 400;
        } else {
            $arr['status_code'] = $status_code;
            $arr['errors']['errcode'] = $error_code;
            $arr['errors'] += $extra;
        }
        return response()->json($arr)->setStatusCode($status_code);
    }
}
