<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function Ebook(){
        return $this->belongsTo(ebook::class);
    }

    public function Account(){
        return $this->belongsTo(account::class);
    }
}
