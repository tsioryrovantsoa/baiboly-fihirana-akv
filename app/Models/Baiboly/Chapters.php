<?php

namespace App\Models\Baiboly;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;

        /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'baiboly';
}
