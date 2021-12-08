<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;
    public function plantCat(){
        return $this->hasMany(Plant::class);
    }
}
