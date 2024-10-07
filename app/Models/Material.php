<?php

namespace App\Models;
use App\Models\Competence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materials'; 
    protected $primaryKey = 'id_materi'; 

    public function kompetensi()
    {
        return $this->belongsToMany(Competence::class, 'competencies_materials', 'id_materi', 'id_kompetensi');
    }

    protected $fillable = [
        'materi',
    ];
}
