<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLessonRequest;
use App\Repositories\LessonRepository;


class LessonController extends Controller
{
    protected LessonRepository $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    public function store(CreateLessonRequest $request)
    {
        return $this->lessonRepository->create($request->all());
    }
}
