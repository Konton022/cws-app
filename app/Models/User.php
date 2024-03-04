<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Fondation\Auth\User as Auhtenticatable;


class User extends Auhtenticatable
{
    use HasFactory;


    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'birthday',
        'status',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $cast = [
        'status' => 'boolean',
    ];

    protected $dates = [
        'brithday'
    ];


}
