<?php

namespace Database\Seeders;

use App\Models\Employee as EmployeeModel;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $employees = [
            ['first_name' => 'Henry', 'last_name' => 'Cahil', 'city' => 'Baghdad', 'salary' => '2500',],
            ['first_name' => 'Jimmy', 'last_name' => 'clive', 'city' => 'Najaf', 'salary' => '1200',],
            ['first_name' => 'James', 'last_name' => 'cage', 'city' => 'Najaf', 'salary' => '3300',],
            ['first_name' => 'Adam', 'last_name' => 'jones', 'city' => 'Baghdad', 'salary' => '12000',],
            ['first_name' => 'Sally', 'last_name' => 'Johnson', 'city' => 'Babil', 'salary' => '500',],
            ['first_name' => 'Monica', 'last_name' => 'Selles', 'city' => 'Kut', 'salary' => '1230',],
        ];

        foreach ($employees as $employee) {
            EmployeeModel::create($employee);
        }
    }
}
