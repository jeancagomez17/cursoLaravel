<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes; //delete all eliminar cuando

    protected $fillable = [
        'name',
        'desc',
        'value',
        'stock',
        'idCategory',

    ];
    public function categoria(){
        return $this->belongsTo(Category::class);
    }
    public function item(){
        return $this->belongsTo(Items::class);
    }
}
