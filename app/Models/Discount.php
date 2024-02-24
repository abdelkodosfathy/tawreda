<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{

    public $table = 'discount';
    public $timestamps = false;
    public $primaryKey = 'dis_id';
    use HasFactory;
    protected $fillable = [
        'dis_name',
        'dis_desc',
        'dis_percent',
    ];
}
