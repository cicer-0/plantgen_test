<?php

namespace App\Http\Requests\ActivityController;

use App\Models\Activity;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActivityControllerShowRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            'id' => 'required|exists:activities,id',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute field is required.',
            'exists' => 'Could not find :attribute.',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {
        $activityId = $this->input('id');
        $activity = Activity::find($activityId);

        if (!$activity) {
            return response()->json(['error' => 'Activity not found.'], 404);
        }

        return response()->json(['activity' => $activity], 200);
    }
}
