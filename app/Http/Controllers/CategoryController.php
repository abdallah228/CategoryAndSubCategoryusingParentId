<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(Request $request)
    {

      $categoris = Category::whereParentId(0)->get();

      return view('category',compact('categoris'));
    }
    public function subCat(Request $request)
    {
        // dd('dd');
        $parent_id = $request->cat_id;
        $subcategories = Category::whereId($parent_id)
                            ->with('subcategories')
                            ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function subsubCat(Request $request)
    {
        // dd('dd');
        $parent_id = $request->cat_id;
        $subcategories = Category::whereId($parent_id)
                            ->with('subcategories')
                            ->get();
        return response()->json([
            'subsubcategories' => $subcategories
        ]);
    }
}
