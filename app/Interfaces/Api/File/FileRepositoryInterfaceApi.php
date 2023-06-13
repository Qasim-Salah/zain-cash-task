<?php

namespace App\Interfaces\Api\File;

use App\Interfaces\RepositoryInterface;

interface FileRepositoryInterfaceApi extends RepositoryInterface
{
    public function getFileGroupedByEmployee(): array;
}
