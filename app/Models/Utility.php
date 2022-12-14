<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;
    protected $table = 'utility';
    protected $fillable = ['brand','name','type','area', 'price','photo'];
}
