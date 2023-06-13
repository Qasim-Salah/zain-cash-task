<?php

namespace App\Http\Resources\File;

use Illuminate\Http\Resources\Json\JsonResource;

class FileGroupByEmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $filesByEmployee = $this->resource->mapToGroups(function ($file) {
            return [
                'filename' => $file->filename,
            ];
        });

        return $filesByEmployee->toArray();
    }
}
