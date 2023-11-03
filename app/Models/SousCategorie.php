<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SousCategorie extends Model
{
    use HasFactory;

    public function getSlug(): string
    {
        return Str::slug($this->nom);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class)->orderBy('numero','asc')->orderBy('titre','asc');
    }
}
