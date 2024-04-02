<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\SpeciesController as SpeciesControllerRequest;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param SpeciesControllerRequest\SpeciesControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(SpeciesControllerRequest\SpeciesControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param SpeciesControllerRequest\SpeciesControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(SpeciesControllerRequest\SpeciesControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param SpeciesControllerRequest\SpeciesControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(SpeciesControllerRequest\SpeciesControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param SpeciesControllerRequest\SpeciesControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(SpeciesControllerRequest\SpeciesControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param SpeciesControllerRequest\SpeciesControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(SpeciesControllerRequest\SpeciesControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
