<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $fillable = [
        'nom', 'prenom',
    ];
    public $timestamps = false;

    public function ordinateurs()
    {
        return $this->belongsToMany(OrdinateursModel::class, 'attributions', 'id_clients', 'id_ordinateurs')->withPivot('horaire');
    }
}
