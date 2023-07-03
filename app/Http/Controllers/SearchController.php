<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->query('keyword');

        $results = Product::with('category')->where('name', 'like', '%' . $keyword . '%')->get();

        return response()->json($results);
    }
}
