<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cocktail;

class CategoryController extends Controller
{
    public function index(Request $request) {
        // $categories = Cocktail::groupBy('strCategory')->get();

        $category = Cocktail::select('strCategory')->groupBy('strCategory')->get();


        return response()->json([
            'success' => true,
            'results' => $category,
        ]);
    }
}
