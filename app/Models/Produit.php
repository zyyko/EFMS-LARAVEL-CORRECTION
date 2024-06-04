<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = "produit";

    protected $fillable = [
        'NomProduit',
        'DescriptionP',
        'categorie_id'
    ];


    public function catégorie()
    {
        return $this->belongsTo(Catégorie::class, 'categorie_id');
    }
}
