<?php

namespace App\Http\Requests\ActivityController;

use App\Models\Activity;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActivityControllerIndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [];
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
        $activities = Activity::all();

        return response()->json(['activities' => $activities], 200);
    }
}
