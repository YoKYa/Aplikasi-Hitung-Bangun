<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    protected $fillable = [
        'count','type', 'result','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
