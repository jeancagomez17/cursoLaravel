<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [

        'cantItems',
        'idOrder',
        'idProd'
    ];

    public function order(){
        return $this->BelongsTo(Orders::class);
    }
    public function prod(){
        return $this->belongsTo(Product::class);
    }

   
}
