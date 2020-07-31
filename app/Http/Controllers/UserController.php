<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Show show user information settings.
     *
     * @return Response
     */
    public function getProfile()
    {
        $user = auth()->user();

        return view('settings.personal.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(UserRequest $request)
    {
        $userId = auth()->user()->id;
        $data = $this->userService->getUserData($request);
        $updateUser = $this->userService->updateUser($userId, $data);

        if ($updateUser) {
            return redirect()->back()->with('success', __('Update information successfully'));
        }

        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
