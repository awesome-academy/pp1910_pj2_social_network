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

if (!function_exists('getAvatar')) {
    function getAvatar($image)
    {
        $imagePath = 'assets/img/avatar.png';

        if ($image) {
            $imagePath = asset('storage/images/users/' . $image);
        }

        return $imagePath;
    }
}
