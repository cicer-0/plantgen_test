<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EnclosureController as EnclosureControllerRequest;

class EnclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EnclosureControllerRequest\EnclosureControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EnclosureControllerRequest\EnclosureControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EnclosureControllerRequest\EnclosureControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EnclosureControllerRequest\EnclosureControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EnclosureControllerRequest\EnclosureControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EnclosureControllerRequest\EnclosureControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EnclosureControllerRequest\EnclosureControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EnclosureControllerRequest\EnclosureControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EnclosureControllerRequest\EnclosureControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EnclosureControllerRequest\EnclosureControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
