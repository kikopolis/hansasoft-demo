<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IdCheckController extends Controller {
    public function __invoke(Request $request): JsonResponse {
        $request->validate([
            'id' => 'required|digits:11|numeric',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'ID is valid',
        ]);
    }
}
