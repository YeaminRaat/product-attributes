<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id');
    }
}
