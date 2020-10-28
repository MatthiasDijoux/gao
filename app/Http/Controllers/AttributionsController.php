<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributionsResource;
use App\Models\AttributionsModel;
use App\Models\ClientsModel;
use App\Models\OrdinateursModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttributionsController extends Controller
{
    function assign(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'client' => 'required',
            'ordinateur' => 'required',
            'date' => 'required',
            'horaire' => 'required'
        ])->validate();
        $ordinateur =  OrdinateursModel::where('id', '=', $validator['ordinateur'])->first();
        $client = ClientsModel::where('id', '=', $validator['client'])->first();
        $attribution = new AttributionsModel;
        $attribution->horaire = $validator['horaire'];
        $attribution->date = $validator['date'];
        $attribution->client()->associate($client);
        $attribution->ordinateur()->associate($ordinateur);
        $attribution->save();

        return  new AttributionsResource($attribution);
    }
    function delete($id)
    {
        $attribution = AttributionsModel::where('id', $id)->delete();
        return ['status' => $attribution];
    }
}
