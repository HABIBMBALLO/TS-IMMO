<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    protected $fillable=['libelle','nombre_etage','superficie','quartier_id','proprietaire_id','typePropriete_id'];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaires::class);
    }

    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }   

    public function type_propriete()
    {
        return $this->belongsTo(Type_Propriete::class);
    }
}
