<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $cmdClient = Client::with('commandes')->get();

        return view('gestion.clientsIndex', [
            'VarClients' => $clients,
            'cmdClient' => $cmdClient
        ]);
    }

    public function show($id)
    {
        $commandes = Client::with('commandes.produits.produit')->find($id);
        $client = Client::with('commandes')->find($id);
        return view('gestion.clientsShow', [
            'client' => $client,
            'commandes' => $commandes
        ]);
    }

}
