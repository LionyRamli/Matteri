<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competence;
use App\Models\Material;


class CompetenceMaterial extends Model
{
    use HasFactory;

    protected $table = 'competencies_materials';
    public $timestamps = true;

    public function competence()
    {
        return $this->belongsTo(Competence::class, 'id_kompetensi', 'id_kompetensi');
    }

    // Relasi ke tabel Materials
    public function material()
    {
        return $this->belongsTo(Material::class, 'id_materi', 'id_materi');
    }
    protected $fillable = [
        'id_kompetensi',
        'id_materi',
    ];
}
