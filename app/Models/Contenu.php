<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Contenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sous_categorie_id', 'titre', 'ordre', 'fichier'];

    public function sous_categorie(): BelongsTo
    {
        return $this->belongsTo(SousCategorie::class);
    }

    public function fichierURL(): string
    {
        return Storage::url('slide/' . $this->fichier);
    }

    public function last_modified_file(): string
    {
        $cheminFichier = storage_path('app/public/slide/'.$this->fichier);

        if (file_exists($cheminFichier)) {
            $timestamp = filemtime($cheminFichier);
            return $timestamp;
        } else {
            return $cheminFichier;
        }
    }
    public function size(): string
    {
        $cheminFichier = storage_path('app/public/slide/'.$this->fichier);

        if (file_exists($cheminFichier)) {
            $fileSizeBytes = filesize($cheminFichier);
            // $fileSizeKb = round($fileSizeBytes / 1024, 2);
            $fileSizeMb = round($fileSizeBytes / (1024 * 1024), 2);
            return $fileSizeMb;
        } else {
            return $cheminFichier;
        }
    }

    public function getFullUrl()
    {
        return storage_path('app/public/slide/'.$this->fichier);
    }
}
