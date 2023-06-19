<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderProduct extends Model
{
    use HasFactory;

    protected $fillable  = ['product_id' , 'title' , 'price' , 'gty'];

    public $timestamps = false;

}
