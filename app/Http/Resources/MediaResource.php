<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MediaResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'file_name' => $this->file_name,
            'mime_type' => $this->mime_type,
            'size'      => $this->size,
            'link'      => $this->getUrl(),
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
        ];
    }
}
