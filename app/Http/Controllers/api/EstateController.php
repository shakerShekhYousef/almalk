<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\direction;
use App\Models\Environment;
use App\Models\Estate;
use App\Models\EstateDirection;
use App\Models\EstateEnvironment;
use App\Models\EstateExteriorFeatures;
use App\Models\EstateHousingType;
use App\Models\EstateInternalFeatures;
use App\Models\EstatePropertStore;
use App\Models\EstateProperty;
use App\Models\EstateTransports;
use App\Models\EstateView;
use App\Models\ExteriorFeatures;
use App\Models\HousingType;
use App\Models\InternalFeatures;
use App\Models\Traits\EstateTraits\EstateRelationship;
use App\Models\Transport;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstateController extends Controller
{
    use EstateRelationship;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es = Estate::with(['direction', 'InternalFeatures'])->get();
        $direction = direction::all();
        $internalfeature = InternalFeatures::all();
        // $id=$es[0]['direction'][0]['directions_id'];
        // $es[0]['direction'][0]['directions_id'] = direction::where('id',$id)->pluck('name_ar');
        return response()->json([
            'status' => 'success',
            'data' => [
                'estate' => $es,
                'direction' => $direction,
                'Internal-Features' => $internalfeature,
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'category_Sub_id' => 'required|max:255',
            'category_Sub_State_id' => 'required',
            'category_Sub_State_det_id' => 'required',

            'country_id' => 'required',
            'city_id' => 'required',
            'price' => 'required',

            'number' => 'nullable|numeric',
            'Number of rooms' => 'nullable|numeric',
            'Building Age' => 'nullable|numeric',
            'Floor location' => 'nullable|numeric',
            'Number of Floors' => 'nullable|numeric',
        ], );

        if ($validated->fails()) {
            return 'missing argoment';
        }

        $Estate = new Estate;

        $Estate->categories_id = $request['category_Sub_id'];
        $Estate->category_subs_id = $request['category_Sub_State_id'];
        $Estate->category_sub_types_id = $request['category_Sub_State_det_id'];

        $Estate->country_id = $request['country_id'];
        $Estate->city_id = $request['city_id'];
        $Estate->price = $request['price'];

        // if($request['number']){$Estate->number = $request['number'];}

        // if($request['Number of rooms']){$Estate->Number_of_rooms = $request['Number of rooms'];}

        // if($request['Building Age']){$Estate->Building_Age = $request['Building Age'];}

        // if($request['Floor location']){$Estate->Floor_location = $request['Floor location'];}

        // if($request['Number of Floors']){$Estate->Number_of_Floors = $request['Number of Floors'];}

        $Estate->save();

        $properties = $request['properties'];
        $estate_property = [];
        foreach ($properties as $property) {
            array_push($estate_property, [
                'estate_id' => $Estate->id,
                'property_id' => $property['property'],
                'value' => $property['value'],
                'property_name_ar' => EstateProperty::where('id', $property['value'])->pluck('name_ar')->toArray()[0],
                'property_name_en' => EstateProperty::where('id', $property['value'])->pluck('name_en')->toArray()[0],

            ]);
        }
        $direction = $request['direction'];
        $estate_direc = [];
        foreach ($direction as $direc) {
            array_push($estate_direc, [
                'estate_id' => $Estate->id,
                'directions_id' => $direc['direction_id'],
            ]);
        }

        $InternalFeatures = $request['Internal-Features'];
        $estate_InternalFeatures = [];
        foreach ($InternalFeatures as $estate_InteFeat) {
            array_push($estate_InternalFeatures, [
                'estate_id' => $Estate->id,
                'internal_features_id' => $estate_InteFeat['InternalFeatures'],
            ]);
        }

        $ExteriorFeatures = $request['Exterior-Features'];
        $estate_ExteriorFeatures = [];
        foreach ($ExteriorFeatures as $estate_ExterFeat) {
            array_push($estate_ExteriorFeatures, [
                'estate_id' => $Estate->id,
                'exterior_Features_id' => $estate_ExterFeat['ExteriorFeatures'],
            ]);
        }

        $Environments = $request['Environment'];
        $estate_Environment = [];
        foreach ($Environments as $Environment) {
            array_push($estate_Environment, [
                'estate_id' => $Estate->id,
                'environment_id' => $Environment['Environment'],
            ]);
        }

        $Transports = $request['Transports'];
        $estate_Transports = [];
        foreach ($Transports as $Transport) {
            array_push($estate_Transports, [
                'estate_id' => $Estate->id,
                'transport_id' => $Transport['Transport'],
            ]);
        }

        $Views = $request['Views'];
        $estate_Views = [];
        foreach ($Views as $View) {
            array_push($estate_Views, [
                'estate_id' => $Estate->id,
                'view_id' => $View['View'],
            ]);
        }

        $HousingTypes = $request['HousingTypes'];
        $estate_HousingTypes = [];
        foreach ($HousingTypes as $HousingType) {
            array_push($estate_HousingTypes, [
                'estate_id' => $Estate->id,
                'housing_type_id' => $HousingType['HousingType'],
            ]);
        }

        EstatePropertStore::insert($estate_property);
        EstateDirection::insert($estate_direc);
        EstateInternalFeatures::insert($estate_InternalFeatures);
        EstateExteriorFeatures::insert($estate_ExteriorFeatures);
        EstateEnvironment::insert($estate_Environment);
        EstateTransports::insert($estate_Transports);
        EstateView::insert($estate_Views);
        EstateHousingType::insert($estate_HousingTypes);

        return $Estate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $es = Estate::with(['property', 'direction', 'InternalFeatures', 'ExteriorFeatures', 'Environments', 'Transport', 'View', 'HousongType'])->where('id', $id)->get();
        $Arr_Prop = json_decode($es[0]['property']);

        // $estateproperty = EstateProperty::whereIn('id', $Arr_Prop[0])->get();
        $direction = direction::all();
        $internalfeature = InternalFeatures::all();
        $exteriorfeature = ExteriorFeatures::all();
        $environment = Environment::all();
        $transport = Transport::all();
        $view = View::all();
        $HousingType = HousingType::all();

        // $id=$es[0]['direction'][0]['directions_id'];
        // $es[0]['direction'][0]['directions_id'] = direction::where('id',$id)->pluck('name_ar');

        return response()->json([
            'status' => 'success',
            'data' => [
                'estate' => $es,
                // 'property' => $estateproperty,
                'direction' => $direction,
                'Internal-Features' => $internalfeature,
                'Exterior-Features' => $exteriorfeature,
                'Environment' => $environment,
                'Transports' => $transport,
                'View' => $view,
                'HousingType' => $HousingType,
            ],
        ]);
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
        Estate::find($id)->delete();
    }
}
