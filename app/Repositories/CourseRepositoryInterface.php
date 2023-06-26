<?php

namespace App\Repositories;

interface CourseRepositoryInterface
{
    public function update(int $id, array $data);
}
