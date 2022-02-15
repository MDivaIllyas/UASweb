<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;

    public function Role(){
        return $this->belongsTo(role::class);
    }

    public function Gender(){
        return $this->belongsTo(gender::class);
    }

    public function Order(){
        return $this->hasMany(order::class);
    }

}
