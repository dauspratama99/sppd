<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_tugas extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas';

    protected $primaryKey = 'id';

    public function detail()
    {
        return $this->belongsTo('App\Models\Detail_tugas', 'nip', 'nip');
    }
}
