<?php
/**
 * Created by PhpStorm.
 * User: sourabh
 * Date: 19-09-2017
 * Time: 17:28
 */


namespace App\Transformers;

class Json
{
    public static function response($data = null, $message = null)
    {
        return [
            'data'    => $data,
            'message' => $message,
        ];
    }
}