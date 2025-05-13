<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    //
    protected $fillable = [
        'description',
        'solde',
        'user_id',
    ];
}
