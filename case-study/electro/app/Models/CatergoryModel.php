<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatergoryModel extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    public function products(){
        return $this->hasMany(ProductModel::class);
    }
}
