<?php

namespace App\Http\Requests\ActivityController;

use App\Models\Activity;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActivityControllerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            'day' => 'required|string',
            'time' => 'required|string',
            'duration' => 'required|integer|min:1',
            'description' => 'required|string',
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
            'string' => 'The :attribute must be a string.',
            'integer' => 'The :attribute must be an integer.',
            'min' => 'The :attribute must be at least :min.',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {

        $activityId = $this->route('id');
        $activity = Activity::find($activityId);

        if (!$activity) {
            return response()->json(['error' => 'Activity not found.'], 404);
        }

        $validatedData = $this->validated();

        $activity->update([
            'day' => $validatedData['day'],
            'time' => $validatedData['time'],
            'duration' => $validatedData['duration'],
            'description' => $validatedData['description'],
        ]);

        return response()->json(['message' => 'Activity updated successfully', 'activity' => $activity], 200);

    }
}
