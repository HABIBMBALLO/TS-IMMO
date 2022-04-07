<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    protected $fillable=['libelle','nombre_etage','superficie','quartier_id','proprietaire_id','typePropriete_id'];

    public function proprietaires()
    {
        return $this->belongsTo(Proprietaires::class);
    }

    public function quartiers()
    {
        return $this->belongsTo(Quartiers::class);
    }   

    public function type_proprietes()
    {
        return $this->belongsTo(Type_Proprietes::class);
    }
}
