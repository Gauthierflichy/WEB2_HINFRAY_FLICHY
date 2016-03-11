<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title', 'client', 'client_metier', 'client_adresse', 'client_email', 'client_tel','client_suivi', 'client_suivi_metier', 'client_suivi_adresse', 'client_suivi_email', 'client_suivi_tel',
        'fiche_identite', 'type_projet', 'context', 'demande', 'objectifs', 'contraintes'
        ];


}
