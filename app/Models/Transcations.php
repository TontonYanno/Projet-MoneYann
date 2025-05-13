<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transcations extends Model
{
    //
    protected $fillable = [
        'typetransaction',
        'compte_id',
        'destinataire',
        'montant',
    ];
}
