<?php

use App\Support\Http\HttpResponse;

if (!function_exists('res')) {
    /**
     * Return an optional HTTP response with the success or error methods.
     *
     * @return \App\Support\Http\HttpResponse
     */
    function res()
    {
        return new HttpResponse();
    }
}
