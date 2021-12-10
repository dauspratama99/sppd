<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugasKepala extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas_kepala';

    protected $primaryKey = 'id';
}
