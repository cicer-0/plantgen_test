<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CaretakerController as CaretakerControllerRequest;

class CaretakerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param CaretakerControllerRequest\CaretakerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(CaretakerControllerRequest\CaretakerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param CaretakerControllerRequest\CaretakerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(CaretakerControllerRequest\CaretakerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param CaretakerControllerRequest\CaretakerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(CaretakerControllerRequest\CaretakerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param CaretakerControllerRequest\CaretakerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(CaretakerControllerRequest\CaretakerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param CaretakerControllerRequest\CaretakerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(CaretakerControllerRequest\CaretakerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
