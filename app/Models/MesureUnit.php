<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesureUnit extends Model
{
    use HasFactory;
    protected $fillable = ['unit_short', 'unit_name'];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MesureUnit::class,'mesure_unit_id','id');
    }
}
