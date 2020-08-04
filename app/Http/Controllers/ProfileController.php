<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Services\ProfileService;
use App\User;
use Illuminate\Http\Request;

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
}
