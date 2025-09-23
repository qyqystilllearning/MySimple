<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    protected $fillable = ['name', 'type', 'description', 'length']; // Is_admin


    /** @use HasFactory<\Database\Factories\CodesFactory> */
    use HasFactory;
}