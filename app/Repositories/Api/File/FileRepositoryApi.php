<?php

namespace App\Repositories\Api\File;

use App\Interfaces\Api\File\FileRepositoryInterfaceApi;
use App\Models\File as FileModel;
use Illuminate\Database\Eloquent\Model;

class FileRepositoryApi implements FileRepositoryInterfaceApi
{

    public function __construct(
        private FileModel     $fileModel,
    )
    {
    }

    public function index(): array
    {
        //
    }

    public function show(int $id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store($request): Model
    {
        //
    }

    public function update(array $request, int $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): bool
    {
        // TODO: Implement destroy() method.
    }

    public function getFileGroupedByEmployee(): array
    {
        $files = $this->fileModel->with('fileable')
            ->get()
            ->groupBy(function ($file) {
                return $file->fileable->full_name;
            });

        return compact('files');
    }
}
