<?php

namespace App\Http\Controllers\API\V1\Employee;

use App\Http\Controllers\Controller;
use App\Http\Resources\Employee\EmployeeGroupByCityResource;
use App\Http\Resources\Employee\EmployeeResource;
use App\Http\Responses\ResponseBuilder;
use App\Interfaces\Api\Employee\EmployeeRepositoryInterfaceApi;
use Illuminate\Http\JsonResponse;
use Validator;

class EmployeeController extends Controller
{

    public function __construct(
        private EmployeeRepositoryInterfaceApi $employeeRepository
    )
    {

    }

    public function index(): JsonResponse
    {
        $data = $this->employeeRepository->index();

        $employees = EmployeeResource::collection($data['employees']);

        $getPagination = paginationInformation($employees->resource->toArray());

        $links = $getPagination['links'];
        $meta = $getPagination['meta'];


        return ResponseBuilder::success([
            'employees' => $employees,
            'links' => $links,
            'meta' => $meta,
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $data = $this->employeeRepository->show($id);

        return ResponseBuilder::success(new EmployeeResource($data['employee']));
    }

    public function getEmployeesGroupedByCity()
    {
        $data = $this->employeeRepository->getEmployeesGroupedByCity();

        $employeesGroupedByCity = EmployeeGroupByCityResource::collection($data['employees']);

        return ResponseBuilder::success($employeesGroupedByCity);
    }

}
