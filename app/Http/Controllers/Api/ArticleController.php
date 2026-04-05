<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController 
{
    public function store(Request $request)
    {
        if ($request->header('x-api-key') !== env('API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'status' => 'success',
            'received' => $request->all()
        ]);
    }
}
