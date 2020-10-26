<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdinateursResource;
use App\Models\OrdinateursModel;
use Illuminate\Http\Request;

class OrdinateursController extends Controller
{
    function index()
    {
        $ordis = OrdinateursModel::all();
        return OrdinateursResource::collection($ordis);
    }
}
