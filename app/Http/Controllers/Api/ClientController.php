<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function getClients(Request $request){

        $clients = DB::table('clients')
            ->select('*')
            ->limit(20)
            ->get();

        return $clients;

    }
}
