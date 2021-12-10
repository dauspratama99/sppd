<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_surat extends Model
{
    use HasFactory;

    protected $table = 'detail_surat';

    protected $primaryKey = 'id';

    public function surat()
    {
        return $this->hasOne('App\Models\Surat_tugas', 'nip', 'nip');
    }
}
