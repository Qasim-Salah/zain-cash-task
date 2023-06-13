<?php


namespace App\Http\Responses;


use Symfony\Component\HttpFoundation\Response as HttpResponse;

class ResponseBuilder
{

    public static function success($data = null, $message = null, $status = HttpResponse::HTTP_OK, $code = null): \Illuminate\Http\JsonResponse
    {
        return static::buildResponse(true, $status, $code, $message, $data);
    }

    public static function error($data = null, $message = null, $status = HttpResponse::HTTP_UNPROCESSABLE_ENTITY, $code = null): \Illuminate\Http\JsonResponse
    {
        return static::buildResponse(false, $status, $code, $message, $data);
    }

    public static function buildResponse($success, $status, $code, $message, $data): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => $success,
            'code' => $code,
            'locale' => app()->getLocale(),
            'message' => $message,
            'data' => $data
        ], $status);
    }

}
