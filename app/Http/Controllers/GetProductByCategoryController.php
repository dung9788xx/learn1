<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetProductByCategoryController extends Controller
{
    public function main(Request $request)
    {
        $products=\App\ProductCategory::find($request->category_id)->products()->get()->toArray();
        return response()->json([
            'code' => 200,
            'data' => $products
        ]);
    }
}
