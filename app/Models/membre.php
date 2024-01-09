<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membre extends Model
{
    protected $table = 'membres';
    use HasFactory;

    protected $fillable = [
        "id",'name',"email","password",'typeuser','created_at','updated_at'
     ];
}
