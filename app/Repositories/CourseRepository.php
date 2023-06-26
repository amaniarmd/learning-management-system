<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function update(int $id, array $data)
    {
        $course = Course::findOrFail($id);
        $course->update($data);

        return $this->jsonResponse($course);
    }
}

