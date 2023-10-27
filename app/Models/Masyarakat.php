<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Otentikasi;

class Masyarakat extends Otentikasi
{

    use HasFactory;
    protected $table = 'masyarakats';
    protected $primaryKey='nik';
    protected $keyType='string';

    public $incrementing=false;

    public $guarded=[];
}
