<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class ListProductCategoryController extends Controller
{
    public function main()
    {
        $productCategorys = ProductCategory::orderBy('priority','ASC')->get();
        return response()->json([
            'code' => 200,
            'data' => $productCategorys
        ]);
    }
}
