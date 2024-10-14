<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function commandesProduits()
    {
        return $this->hasMany(Commandes_Produit::class);
    }
}
