<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsModel extends Model
{
    protected $table = 'accounts';

    public $timestamps = false;

    protected $fillable = [
        'account_number',
        'user_id',
        'balance'
    ];

}
