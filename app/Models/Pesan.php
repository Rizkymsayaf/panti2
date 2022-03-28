<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public $table = 'pesans';

    protected $fillable = [
        'nama',
        'email',
        'pesan',
    ];
}
