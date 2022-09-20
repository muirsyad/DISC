<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_asnwer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id','D_value', 'I_value',
        'S_value', 'C_value'
    ];
}
