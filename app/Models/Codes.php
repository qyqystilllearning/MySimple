<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    protected $fillable = ['name', 'type', 'description', 'length', 'organization_id']; // Is_admin

    /** @use HasFactory<\Database\Factories\CodesFactory> */
    use HasFactory;

    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}