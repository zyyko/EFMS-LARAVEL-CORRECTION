<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    use HasFactory;

    public $table = "categorie";
    public function produit()
    {
        return $this->hasMany(Produit::class, 'categorie_id');
    }
}
