<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Show password changing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getChangePassword()
    {
        return view('settings.password.index');
    }

    /**
     * Update the user password.
     *
     * @param  \App\Http\Requests\UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->current_password, auth()->user()->password))) {
            return back()->with('error', __('Your current password does not matches with the password you provided. Please try again'));
        }

        if (strcmp($request->current_password, $request->new_password) == 0) {
            //Current password and new password are same
            return back()->with('error', __('New Password cannot be same as your current password. Please choose a different password'));
        }

        $newPassword = bcrypt($request->new_password);
        $updatePassword = $this->userService->updateUser(auth()->user()->id, ['password' => $newPassword]);

        if ($updatePassword) {
            return back()->with('success', __('Your password has been updated!'));
        }else {
            return back()->with('error', __('Something went wrong!'));
        }
    }
}
