<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class UserService
{
    /**
     * Get User data from request.
     *
     * @param  Model  $request
     * @return Array ['name', 'birthday', 'gender', 'address']
     */
    public function getUserData($request)
    {
        $birthday = Carbon::createFromFormat('d-m-Y', $request->datetimepicker)->toDateString();

        $request->merge(['birthday' => $birthday]);

        return $request->only([
            'name',
            'birthday',
            'gender',
            'address'
        ]);
    }

    /**
     * Update user in database.
     *
     * @param Int $id
     * @param Array $data['name', 'birthday', 'gender', 'address']
     * @return Boolean
     */
    public function updateUser($id, $data)
    {
        $user = User::findOrFail($id);

        if ($user->id != auth()->user()->id) {
            return false;
        }

        try {
            $user->update($data);
        } catch (\Throwable $th) {
            Log::error($th);

            return false;
        }

        return true;
    }
}
