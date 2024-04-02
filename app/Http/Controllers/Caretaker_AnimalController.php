<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Caretaker_AnimalController as Caretaker_AnimalControllerRequest;

class Caretaker_AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(Caretaker_AnimalControllerRequest\Caretaker_AnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
