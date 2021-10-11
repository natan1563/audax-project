<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type_user'
    ];

    public function request()
    {
        return $this->hasMany(Request::class);
    }

    public function isAdmin()
    {
        return $this->type_user == 'admin';
    }

    public function isSolicitor()
    {
        return $this->type_user == 'solicitor';
    }

    public function isApprover()
    {
        return $this->type_user == 'approver';
    }
}
