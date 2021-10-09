<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'materials',
        'status',
        'observation',
        'created_at',
        'approver_id',
        'user_id'
    ];
}
