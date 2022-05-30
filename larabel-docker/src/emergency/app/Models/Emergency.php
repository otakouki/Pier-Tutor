<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;
    protected $table='emergencys_table';
    protected $primaryKey='emergency_id';
    protected $fillable = ['user_name', 'mail', 'check_name', 'situation']; 
}
