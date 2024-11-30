<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class IDCard extends Model
{
    //
    protected $fillable = ['photo', 'name', 'address', 'dob', 'expiry_date', 'contact_number', 'email'];

}