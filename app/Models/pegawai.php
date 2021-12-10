<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $primaryKey = 'id';


    public function surat_tugas()
    {
        return $this->belongsTo('App\Models\Surat_tugas', 'nip', 'nip');
    }
}
