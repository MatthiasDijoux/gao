<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributionsResource;
use App\Http\Resources\OrdinateursResource;
use App\Models\OrdinateursModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdinateursController extends Controller
{
    function index()
    {
        $data = OrdinateursModel::with(['clients'])->get();
        return $data;
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
}
