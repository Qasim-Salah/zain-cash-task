<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function index(): array;

    public function store(array $request): Model;

    public function show(int $id);

    public function update(array $request, int $id);

    public function destroy(int $id): bool;

}
