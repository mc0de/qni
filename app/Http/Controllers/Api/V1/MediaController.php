<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use App\Http\Requests\MediaStoreRequest;
use App\Http\Resources\MediaResource;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function store(MediaStoreRequest $request)
    {
        $image = auth('api')->user()->addMediaFromRequest('file')
            ->setName(str_random(11))
            ->toMediaCollection('anonymous');

        return new MediaResource($image);
    }
}
