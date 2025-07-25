<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function storeLesson(Request $request, $courseId){
        // Later: Validate, find course, create lesson
        return response()->json([
            'message' => 'storeLesson reached!',
            'courseId' => $courseId,
            'data' => $request->all()
        ]);
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
