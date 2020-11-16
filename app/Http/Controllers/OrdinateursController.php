<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdinateursResource;
use App\Models\OrdinateursModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdinateursController extends Controller
{
    function index(Request $request)
    {
        $date = Validator::make($request->query(), [
            'date' => 'date|required'
        ])->validate();
        $data = OrdinateursModel::with(['attributions' => function ($q) use ($date) {
            $q->where('date', $date['date'])
                ->with(['client']);
        }])->paginate(3);
        return OrdinateursResource::collection($data);
    }
    function add(Request $request)
    {
        $validator = Validator::make(
            $request->input(),
            ['nom' => 'required']
        )->validate();
        $ordinateur = OrdinateursModel::create($validator);
        return new OrdinateursResource($ordinateur);
    }

    function delete($id)
    {
        $ordinateur = OrdinateursModel::where('id', $id)->delete();
        return $ordinateur;
    }
}
