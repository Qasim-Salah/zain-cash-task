<?php

namespace App\Interfaces\Api\Employee;

use App\Interfaces\RepositoryInterface;

interface EmployeeRepositoryInterfaceApi extends RepositoryInterface
{
    public function getEmployeesGroupedByCity(): array;
}
