<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use Illuminate\Http\JsonResponse;

class GroupController extends Controller
{
    public function store(StoreGroupRequest $request): JsonResponse
    {
        $group = Group::create($request->validated());
        return response()->json($group, 201);
    }
}
