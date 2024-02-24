<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $table = 'brand';
    public $timestamps = false;
    public $primaryKey = 'brand_id';
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'brand_desc',
        'brand_img',

    ];
}
