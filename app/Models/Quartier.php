<?php

namespace App\Models;

use App\Models\Quartiers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quartier extends Model
{
    use HasFactory;
    
    public function commune() {
        return $this->belongsTo(Commune::class);
    }

}
