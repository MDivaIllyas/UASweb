<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    use HasFactory;

    public function Order(){
        return $this->hasMany(order::class);
    }
}
