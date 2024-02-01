<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table= 'client';
    protected $primaryKey= 'id';
    protected $fillable =['company name', 'name', 'email','phone' ] ;
}
