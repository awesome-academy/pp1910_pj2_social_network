<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\ActivityService;

class PostService
{
    protected $post;

    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }

    public function getPostData($request)
    {
        return $request->only([
            'title',
            'image',
            'type'
        ]);
    }

    public function postImage($images)
    {
        $imageArray = [];
        foreach ($images as $image) {
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('/posts', $fileName, 'post_images');
            $imageArray[] = $fileName;
        }
        $imageString = json_encode($imageArray);

        return $imageString;
    }

    public function storePost($data)
    {
        try {
            $post = Post::create($data);

            $activityData = [
                'user_id' => $data['user_id'],
                'post_id' => $post->id,
                'type' => config('activity.type.upload')
            ];

            $this->activityService->storeActivity($activityData);
        } catch(\Throwable $th) {
            Log::error($th);

            return false;
        }
        
        return true;
    }
}