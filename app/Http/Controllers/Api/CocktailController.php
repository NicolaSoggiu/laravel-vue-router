<?php

namespace App\Http\Controllers\Api;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CocktailController extends Controller
{
    public function index(Request $request)
    {

        $category = $request->query('category');
        if ($category) {
            $cocktails = Cocktail::where('strCategory', $category)->get();
        } else {
            $cocktails = Cocktail::all();
        }

        return response()->json([
            'success'    => true,
            'results'    => $cocktails,
        ]);
    }



    public function show(Cocktail $cocktail)
    {
        return response()->json([
            'success' => true,
            'results' => $cocktail,
        ]);

    }
}
