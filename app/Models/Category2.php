<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    use HasFactory;

    protected $table='categories';

    public function Category2(){
        return $this->hasMany(Category::class);
    }
}
