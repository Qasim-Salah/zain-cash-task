<?php

namespace App\Repositories\Api\Employee;

use App\Interfaces\Api\Employee\EmployeeRepositoryInterfaceApi;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmployeeRepositoryApi implements EmployeeRepositoryInterfaceApi
{

    public function __construct(
        private Employee $employeeModel,
    )
    {
    }

    public function index(): array
    {
        $employees = $this->employeeModel->latest()->paginate(PAGINATION_COUNT);

        return compact('employees');
    }

    public function show(int $id)
    {
        $employee = $this->employeeModel->findOrFail($id);

        return compact('employee');
    }

    public function getEmployeesGroupedByCity(): array
    {
        $employees = $this->employeeModel->select('city', DB::raw('GROUP_CONCAT(CONCAT(first_name, " ", last_name)) AS full_name_employee'), DB::raw('SUM(salary) as total_salary'))
            ->groupBy('city')
            ->paginate(PAGINATION_COUNT);

        return compact('employees');
    }

    public function store(array $request): Model
    {
        // TODO: Implement store() method.
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
