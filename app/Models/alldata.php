<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alldata extends Model
{
    use HasFactory;
    protected $fillable = ['msg','phone'];
}
