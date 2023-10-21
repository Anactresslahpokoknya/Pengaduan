<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $primaryKey='id_pengaduan';
    public $incrementing=true;
    public $guarded=[];
}
