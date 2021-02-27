<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information_portail extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_at',
        'updated_at',
    ];
}
