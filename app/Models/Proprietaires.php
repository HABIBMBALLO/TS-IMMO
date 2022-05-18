<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaires extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','civilite','sexe','email','telephone','dateNaissance','lieuNaissance','numPieceIdentite'];




}
