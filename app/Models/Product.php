<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'sped_code_id', 'product_type_id', 
                        'mesure_unit_id', 'product_code', 'product_name', 
                        'product_image', 'volume', 'stock', 'product_value', 'register_date' ];
    
    public function users():\Illuminate\Database\Eloquent\Relations\BelongsTo
     {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function mesure_units(): \Illuminate\Database\Eloquent\Relations\BelongsTo 
    {
        return $this->belongsTo(MesureUnit::class,'mesure_unit_id', 'id');
    }

    public function product_types(): \Illuminate\Database\Eloquent\Relations\BelongsTo 
    {
        return $this->belongsTo(ProductType::class,'product_type_id', 'id');
    }

    public function sped_codes(): \Illuminate\Database\Eloquent\Relations\BelongsTo 
    {
        return $this->belongsTo(SpedCode::class,'sped_code_id', 'id');
    }


}

