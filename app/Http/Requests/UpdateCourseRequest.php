<?php

namespace App\Http\Requests;

class UpdateCourseRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'course_id' => 'exists:courses,id',
            'price' => 'required|numeric',
        ];
    }
}
