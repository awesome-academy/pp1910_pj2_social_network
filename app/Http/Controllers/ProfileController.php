<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Services\ProfileService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    protected $profileService;
    protected $postService;

    public function __construct(ProfileService $profileService, PostService $postService)
    {
        $this->profileService = $profileService;
        $this->postService = $postService;
    }

    /**
     * Display others user profile.
     *
     * @param Illuminate\Http\Request $request
     * @param string $username
     * @return \Illuminate\Http\Response
     */
    public function showProfile(Request $request, $username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('profile.index', compact('user'));
    }

    public function updateAvatar(Request $request)
    {
        $user = auth()->user();
        $data = $request->only([
            'avatar',
            'cover'
        ]);
        if (isset($data['avatar'])) {
            $image = $data['avatar'];
            $updateField = 'avatar';
        } else {
            $image = $data['cover'];
            $updateField = 'cover';
        }
        $saveImage = $this->profileService->updateImage($image);

        try {
            $user->update([$updateField => $saveImage]);
        } catch (\Throwable $throwable) {
            Log::error($throwable);

            return back()->with('upload_error', __('Avatar update error!'));
        }

        return back()->with('upload_success', __('Avatar update successful!'));
    }
}
