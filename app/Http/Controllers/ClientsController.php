<?php

namespace App\Http\Controllers;

use App\Models\ClientsModel;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function search()
    {
        $clients = ClientsModel::get();
        return $clients;
    }
}
