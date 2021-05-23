<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Like;

class LikesController extends Controller
{
    public function like(LikeRequest $request)
    {
        $request->user()->addLike($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count()
            ]);
        }

        return redirect()->back();
    }

    public function dislike(LikeRequest $like)
    {
        $like->user()->removeLike($like->likeable());

        if ($like->ajax()) {
            return response()->json([
                'likes' => $like->likeable()->likes()->count()
            ]);
        }

        return redirect()->back();
    }
}
