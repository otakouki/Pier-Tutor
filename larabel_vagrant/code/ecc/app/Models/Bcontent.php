<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bcontent extends Model
{
    use SoftDeletes; //論理削除を行う場合は追加する。
//当該モデルクラスと bcontents テーブルを紐づける。命名規則に基づくため、なくても可 
protected $table='bcontents';
protected $primaryKey='id';
}
