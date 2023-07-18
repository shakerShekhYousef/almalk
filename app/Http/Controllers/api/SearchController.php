<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategorySub;
use App\Models\CategorySubType;
use App\Models\CategorySubTypeDet;
use App\Models\EstateCategory;
use App\Models\EstateProperty;

class SearchController extends Controller
{
    public function Elements()
    {
        $categories = Category::all();

        return $categories;
    }

    public function Element_Sub($id)
    {
        $category_sub = CategorySub::where('category_id', $id)->get();

        return $category_sub;
    }

    public function Element_Sub_det($id)
    {
        $category_sub = CategorySubType::where('category_Sub_id', $id)->get();

        return $category_sub;
    }

    public function Element_Sub_det_type($id)
    {
        $category_sub = CategorySubTypeDet::where('category_Sub_type_id', $id)->get();

        return $category_sub;
    }

    public function EstateProperty($id)
    {
        $EstateProperty = EstateProperty::all();

        return $EstateProperty;
    }

    public function EstatePropertyOptions($id)
    {
        $EstateProperty = EstateProperty::find($id);
        $EstatePropertyOptions = $EstateProperty->EstatePropertyOption;

        return $EstatePropertyOptions;
    }

    public function Esta()
    {
        $e = EstateCategory::all()->toArray();
        $eee = $e[0]['property_id'];

        return EstateProperty::whereIn('id', $eee)->get();
    }
}
