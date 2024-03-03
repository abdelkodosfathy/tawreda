<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'product';
    public $timestamps = true;
    public $primaryKey = 'product_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_img',
        'product_desc',
        'brand_id',
        'cat_id',
        'product_price',
        'dis_id',
        'product_cert',
    ];
}
