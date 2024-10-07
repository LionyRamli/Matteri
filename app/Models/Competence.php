<?php

namespace App\Models;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $table = 'competencies'; // Menentukan tabel yang digunakan model ini, yaitu 'kompetensi'
    protected $primaryKey = 'id_kompetensi'; // Menentukan primary key pada tabel, yaitu 'id_kompetensi'

    public function materi()
    {
        
            return $this->belongsToMany(Material::class, 'competencies_materials', 'id_kompetensi', 'id_materi');
        
    }
    protected $fillable = [
        'kompetensi',
    ];
}
