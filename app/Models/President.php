<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;

    public function team()
    { 
        return $this->hasOne('App\Models\Team'); 
    }
    
}
