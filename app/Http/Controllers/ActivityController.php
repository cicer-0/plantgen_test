<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ActivityController as ActivityControllerRequest;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ActivityControllerRequest\ActivityControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ActivityControllerRequest\ActivityControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ActivityControllerRequest\ActivityControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ActivityControllerRequest\ActivityControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ActivityControllerRequest\ActivityControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ActivityControllerRequest\ActivityControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ActivityControllerRequest\ActivityControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ActivityControllerRequest\ActivityControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ActivityControllerRequest\ActivityControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ActivityControllerRequest\ActivityControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
