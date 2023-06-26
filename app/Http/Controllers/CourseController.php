<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;

class CourseController extends Controller
{
    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function update(UpdateCourseRequest $request, $courseId)
    {
        return $this->courseRepository->update($courseId, $request->all());
    }
}
