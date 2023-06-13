<?php

namespace App\Services\File;

use App\Interfaces\File\FileRepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class FileService
{

    public function __construct(
        private FileRepositoryInterface $fileRepository
    )
    {
    }

    public function store(FormRequest $request)
    {
        $requests = $request->validated();

        $this->fileRepository->store($requests);
    }

}
