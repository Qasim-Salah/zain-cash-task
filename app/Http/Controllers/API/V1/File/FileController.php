<?php

namespace App\Http\Controllers\API\V1\File;

use App\Http\Controllers\Controller;
use App\Http\Resources\File\FileGroupByEmployeeResource;
use App\Http\Responses\ResponseBuilder;
use App\Interfaces\Api\File\FileRepositoryInterfaceApi;
use Illuminate\Http\JsonResponse;
use Validator;

class FileController extends Controller
{

    public function __construct(
        private FileRepositoryInterfaceApi $fileRepository
    )
    {

    }

    public function getFileGroupedByEmployee(): JsonResponse
    {
        $data = $this->fileRepository->getFileGroupedByEmployee();

        $fileGroupedByEmployee = FileGroupByEmployeeResource::collection($data['files']);

        return ResponseBuilder::success($fileGroupedByEmployee);

    }

}
