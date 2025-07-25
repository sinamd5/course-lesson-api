<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLessonRequest;
use App\Models\Course;


class CourseController extends Controller
{
    public function storeLesson(StoreLessonRequest $request, $courseId){
        $course = Course::findOrFail($courseId);

        $lesson = $course->lessons()->create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Lesson created successfully',
            'data' => $lesson,
        ], 201);
    }

    public function updateCoursePrice(Request $request, $courseId){
        // Later: Validate, find course, update price
        return response()->json([
            'message' => 'updateCoursePrice reached!',
            'courseId' => $courseId,
            'data' => $request->all()
        ]);
    }
}
