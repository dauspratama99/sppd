<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportasiToTerminal extends Model
{
    use HasFactory;

    protected $table = 'transportasi_to_terminal';

    protected $primaryKey = 'id';
}
