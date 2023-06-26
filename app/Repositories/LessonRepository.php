<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository extends BaseRepository implements LessonRepositoryInterface
{
    public function create(array $data)
    {
        $lesson = Lesson::create($data);

        return $this->jsonResponse($lesson);
    }
}

