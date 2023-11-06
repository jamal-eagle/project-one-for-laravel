<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estate;
class Photo extends Model
{
    use HasFactory;
    protected $fillable = [ 'photo'];
    protected $hidden = [

        'created_at',
        'updated_at',

    ];
}
