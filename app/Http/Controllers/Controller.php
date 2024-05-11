<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sendResponseJson($result, $message, bool $status = true , int $code = \Symfony\Component\HttpFoundation\Response::HTTP_OK,$success = true): array
    {
        return [
            'success'=> $success,
            'message' => $message,
            'data' => $result,
            'status' => $status,
            'code' => $code,

        ];
    }
}
