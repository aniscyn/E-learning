<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'tb_guru';
    protected $primaryKey = 'nip';
    protected $keyType = 'string';
    protected $guarded = [];
}
