<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Elements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class ElementsController extends Controller
{
    protected $estateController;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Elements::all();
        foreach ($collection as $col) {
            $col->category_id = Category::where('id', 1)->pluck('name_ar')[0];
            $col->country_id = Country::where('id', 1)->pluck('name_ar')[0];
            $col->city_id = City::where('id', 1)->pluck('name_ar')[0];
        }

        return $collection;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = $request->toArray();

        return $d['price'];
        $elements = new Elements();
        $elements->category_id = $request->category_id;
        $elements->country_id = $request->country_id;
        $elements->city_id = $request->city_id;
        $elements->Summary = $request->Summary;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = 'sdsd'. 1;
            $file->move(public_path('public/Image'), $filename);
            $elements->image = $filename;
        }

        // $table_name  = Category::where('id',$request->category_id)->pluck('Table_name')->toArray();

        switch ($request->category_id) {
            case 1:
                $table_name1 = (new EstateController)->store($request);
                break;
        }

        $elements->Elements_id = $table_name1;
        $elements->save();

        return $elements;
        // return DB::table($table_name[0])->where('id',$table_name1)->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
