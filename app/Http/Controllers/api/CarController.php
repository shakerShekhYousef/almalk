<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'broker_ar' => 'nullable|max:50',
            'broker_en' => 'nullable|max:50',
            'manufacture_year' => 'nullable',
            'status' => 'nullable|in:rent,sale,daily_rent',
            'is_barter' => 'nullable|in:0,1',
            'is_video_call' => 'nullable|in:0,1',
            'is_warranty' => 'nullable|in:0,1',
            'details_ar' => 'nullable',
            'details_en' => 'nullable',
            'price' => 'required|numeric|gt:0',
            'area_id' => 'required|exists:areas,id',
            'type_id' => 'nullable|exists:types,id',
            'category_id' => 'nullable|exists:categories,id',
            'sub_type_id' => 'nullable|exists:sub_types,id',
            'images' => 'array',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->first());
        }
        $data =
            [
                'broker_ar' => $request['broker_ar'],
                'broker_en' => $request['broker_en'],
                'manufacture_year' => $request['manufacture_year'],
                'status' => $request['status'],
                'is_barter' => $request['is_barter'],
                'is_warranty' => $request['is_warranty'],
                'details_ar' => $request['details_ar'],
                'details_en' => $request['details_en'],
                'type_id' => $request['type_id'],
                'category_id' => $request['category_id'],
                'sub_type_id' => $request['sub_type_id'],
                'price' => $request['price'],
                'area_id' => $request['area_id'],
                'user_id' => 1,
            ];
        $car = Car::create($data);
        if ($car) {
            if ($request->hasFile('images')) {
                $images = [];
                $count = 0;
                $files = $request->file('images');
                foreach ($files as $file) {
                    $count++;
                    $fileName = time().$count.'.'.$file->getClientOriginalExtension();
                    $path = $file->storeAs('cars', $fileName, 'public');
                    array_push($images, ['url' => $path, 'car_id' => $car->id]);
                }
                CarImage::insert($images);
            }
        }

        return returnSuccessMessage($car);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
