<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class SousCategorie extends Model
{
    use HasFactory;

    public function getSlug(): string
    {
        return Str::slug($this->nom);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class)->orderBy('numero','asc')->orderBy('titre','asc');
    }

    public function fichierLogo(): string
    {
        return Storage::url('logo/'.$this->logo);
    }
}
