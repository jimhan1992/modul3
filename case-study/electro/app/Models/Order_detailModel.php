<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detailModel extends Model
{
    use HasFactory;
    protected $table='order_detail';
    public $timestamps = FALSE;
    public function order(){
        return $this->hasMany(OrderModel::class);
    }
    public function product(){
        return $this->belongsTo(ProductModel::class);
    }
}
