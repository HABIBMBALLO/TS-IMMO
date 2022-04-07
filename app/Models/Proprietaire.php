<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','civilite','sexe','email','telephone','dateNaissance','lieuNaissance','numPieceIdentite'];
    public function administrateur() {
        return $this->hasMany(administrateur::class);
    }
}
