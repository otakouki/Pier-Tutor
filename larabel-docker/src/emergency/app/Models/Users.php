<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table='users_table';
    protected $primaryKey='user_id';
    protected $fillable = ['user_name', 'mail', 'password', 'department'];    
}
