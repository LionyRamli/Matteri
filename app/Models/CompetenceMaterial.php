<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceMaterial extends Model
{
    use HasFactory;

    protected $table = 'competencies_materials';
    public $timestamps = true;

    protected $fillable = [
        'id_kompetensi',
        'id_materi',
    ];
}
