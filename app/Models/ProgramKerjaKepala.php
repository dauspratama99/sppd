<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerjaKepala extends Model
{
    use HasFactory;

    protected $table = 'program_kerja_kepala';

    protected $primaryKey = 'id';
}
