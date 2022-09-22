<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('Admin.Clients.index',[
            'Clients' => Client::All()
        ]);
    }
    public function create(){
        return view('Admin.Clients.create');
    }
}
