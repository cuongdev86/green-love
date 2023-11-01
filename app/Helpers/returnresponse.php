<?php

use Illuminate\Support\Facades\Response;

function returnSuccess($data, $message, $status = 200, $options = [])
{
    $response = [
        'result' => true,
        'message' => $message,
        'data' => $data
    ];
    if (!empty($options)) {
        $response = array_merge($response, $options);
    }
    return Response::json($response, $status);
}
/** default = 0 thì return ra chỗ khác, ví dụ 401 thì default ra trang không có quyền */
function returnError($data, $message, $status = 500, $default = 0)
{
    $response = [
        'result' => false,
        'message' => $message,
        'default' => $default,
        'data' => $data
    ];
    return Response::json($response, $status);
}

function returnNotFound($message = 'Not Found', $data = null, $default = 0)
{
    return Response::json([
        'result' => false,
        'message' => $message,
        'default' => $default,
        'data' => $data
    ], 404);
}

function returnUnauthorized($message = 'Unauthorized', $data = null, $default = 0)
{
    return Response::json([
        'result' => false,
        'message' => $message,
        'default' => $default,
        'data' => $data
    ], 401);
}

function returnForbidden($message = 'Forbidden', $data = null, $default = 0)
{
    return Response::json([
        'result' => false,
        'message' => $message,
        'default' => $default,
        'data' => $data
    ], 403);
}

function returnBadRequest($message = 'Bad Request', $data = null, $default = 0)
{
    return Response::json([
        'result' => false,
        'message' => $message,
        'default' => $default,
        'data' => $data
    ], 400);
}
