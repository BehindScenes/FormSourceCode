<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User As Authenticatable;
use Illuminate\Notifications\Notifiable;

class ClientsModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'clients';

    protected $fillable = [
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
