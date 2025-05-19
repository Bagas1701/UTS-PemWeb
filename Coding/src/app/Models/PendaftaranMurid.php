<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PendaftaranMurid extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_murids';
    protected $fillable = [
        'student_name',
        'class',
        'nisn',
        'jenis_kelamin',
        'alamat',
        'ekskul_id',
    ];

     // Relasi: Satu pendaftaran milik satu ekstrakurikuler
    public function Ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }
}
