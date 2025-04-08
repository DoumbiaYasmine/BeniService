<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;

    protected $table = 'adherents';

    protected $fillable = [
        'nom_adherent',
        'prenom_adherent',
        'contact_adherent',
        'date_ajout_adherent',
        'numero_compte',
        'numero_cni',
        'lieu_residence',
        'lieu_travail',
        'photo',
        'carnet',
        'statut',
        'solde',
        'id_user',
    ];

    protected $dates = [
        'date_ajout_adherent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
