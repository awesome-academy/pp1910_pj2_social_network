<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class ProfileService
{
    public function updateImage($image)
    {
        try {
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('/users', $fileName, 'post_images');

            return $fileName;
        } catch (\Throwable $t) {
            Log::error($t);

            return false;
        }
    }
}
