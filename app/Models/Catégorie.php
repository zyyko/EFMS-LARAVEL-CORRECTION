<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    use HasFactory;


    protected $table = "categories";

    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}
