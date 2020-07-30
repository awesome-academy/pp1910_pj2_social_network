<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

if (!function_exists('formatUserBirthday')) {
    function formatDate($date, $format = 'd-m-Y')
    {
        try {
            $dateFormatted = Carbon::parse($date)->format($format);
        } catch(\Throwable $th) {
            Log::error($th);

            return '';
        }

        return $dateFormatted;
    }
}
