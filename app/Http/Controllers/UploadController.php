<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Spatie\MediaLibrary\Media;
use App\Http\Requests\UploadRequest;

class UploadController extends Controller
{
    public function upload(UploadRequest $request)
    {
        if ($user_id = Auth::id()) {
            //
        } else {
            $user = User::withTrashed()->findOrFail(2);
            $image = $user->addMediaFromRequest('file')
                ->setName(str_random(11))
                ->toMediaCollection('anonymous');
        }

        return response()->json($image->getUrl());
    }

    public function getMedia($name)
    {
        if ($image = Media::where('name', $name)->first()) {
            return response()->file($image->getPath());
        }

        abort(404);
    }
}
