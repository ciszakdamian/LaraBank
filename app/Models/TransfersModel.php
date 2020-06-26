<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransfersModel extends Model
{
    protected $table = 'transfers';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'sender_account',
        'recipient_account',
        'amount',
        'title',
        'data'
    ];

}
