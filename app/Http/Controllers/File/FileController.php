<?php

namespace App\Http\Controllers\File;

use App\Http\Requests\File\FileRequest;
use App\Http\Responses\BaseHttpResponse;
use App\Interfaces\File\FileRepositoryInterface;
use App\Services\File\FileService;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{

    public function __construct(private FileRepositoryInterface $fileRepository)
    {
    }

    public function index(): View
    {
        //
    }

    public function create(): View
    {
        $data = $this->fileRepository->create();

        return view('pages.file.create', [
            'employees' => $data['employees'],
        ]);
    }

    public function store(FileRequest $request, FileService $fileService, BaseHttpResponse $response)
    {
        $fileService->store($request);

        notify()->success('تمت عملية الرفع بنجاح');

        return $response->setPreviousUrl(route('files.create'));
    }

    public function show($id): View
    {
        //
    }

    public function edit($id): View
    {
        //
    }

    public function update(Request $request, int $id, BaseHttpResponse $response): BaseHttpResponse
    {
        //
    }

}
