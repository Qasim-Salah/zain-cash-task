<?php

namespace App\Repositories\File;

use App\Interfaces\File\FileRepositoryInterface;
use App\Models\Employee as EmployeeModel;

class FileRepository implements FileRepositoryInterface
{

    public function __construct(
        private EmployeeModel $employeeModel
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
        $employees = $this->employeeModel->latest()->get();

        return view('pages.file.create', compact('employees'));
    }

    public function store($request): EmployeeModel
    {
        $employee = $this->employeeModel->findOrFail($request['employee_id']);

        if (isset($request['file'])) {
            foreach ($request['file'] as $fileName) {

                $employee->files()->create([
                    'filename' => upload_image('/files/employees', $fileName),
                    'fileable_id' => $request['employee_id'],
                    'fileable_type' => EmployeeModel::class,
                ]);
            }
        }
        return $employee;
    }

    public function update(array $request, int $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): bool
    {
        // TODO: Implement destroy() method.
    }

}
