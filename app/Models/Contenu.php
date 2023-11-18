<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sous_categorie_id', 'titre', 'ordre', 'fichier', 'fichier_date', 'fichier_taille'];

    protected $casts = [
        'fichier_date' => 'datetime:Y-m-d',
    ];

    public function sous_categorie(): BelongsTo
    {
        return $this->belongsTo(SousCategorie::class);
    }

    public function fichierURL(): string
    {
        return Storage::url('slide/' . $this->fichier);
    }

    public function last_modified_file(): string|null
    {
        $cheminFichier = storage_path('app/public/slide/' . $this->fichier);

        if (file_exists($cheminFichier)) {
            $timestamp = filemtime($cheminFichier);
            return date('Y-m-d h:i:s', $timestamp);
        } else {
            return null;
        }
    }
    public function size(): string|null
    {
        $cheminFichier = storage_path('app/public/slide/' . $this->fichier);

        if (file_exists($cheminFichier)) {
            $fileSizeBytes = filesize($cheminFichier);
            // $fileSizeKb = round($fileSizeBytes / 1024, 2);
            $fileSizeMb = round($fileSizeBytes / (1024 * 1024), 2);
            return $fileSizeMb;
        } else {
            return null;
        }
    }

    public function getFileInfo()
    {
        $this->fichier_date = $this->last_modified_file();
        $this->fichier_taille = $this->size();
        $this->save();
    }

    public function getFullUrl()
    {
        return storage_path('app/public/slide/' . $this->fichier);
    }

    public function scopeApplyFilters(Builder $query, $orderBy, $order, $search): Builder
    {
        $validColumns = [
            'titre',
            'fichier',
            'fichier_date',
            'fichier_taille',
            'updated_at'
        ];

        if (!in_array($orderBy, $validColumns)) {
            $orderBy = 'updated_at';
        }
        $query->orderBy($orderBy, $order);

        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                $query->where('titre', 'like', '%' . $search . '%')
                    ->orWhere('numero', 'like', '%' . $search . '%')
                    ->orWhere('fichier', 'like', '%' . $search . '%');
            });
        };

        return $query;
    }
}
