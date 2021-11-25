<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function category(){
        return $this->belongsTo(CatergoryModel::class);
    }
    public function order_detail(){
        return $this->hasMany(Order_detailModel::class);
    }
}
