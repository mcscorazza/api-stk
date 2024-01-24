<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpedCode extends Model
{
    use HasFactory;
    protected $fillable = ['sped_code', 'sped_description'];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class,'sped_code_id','id');
    }
}
