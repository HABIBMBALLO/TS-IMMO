<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Propriete extends Model
{
    use HasFactory;

    public function  proprietes  (){
        return $this-> HasMany (Propriete::class);

    }
}
