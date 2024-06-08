<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'pages',
        'description',
        'image',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo(Catégorie::class);
    }
}
