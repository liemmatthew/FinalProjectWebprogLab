<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table = 'plants';
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
