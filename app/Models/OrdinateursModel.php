<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdinateursModel extends Model
{
    use HasFactory;
    protected $table = "ordinateurs";
    protected $fillable = [
        'nom',
    ];
    public $timestamps = false;

    public function clients()
    {
        return $this->belongsToMany(ClientsModel::class, 'attributions','id_ordinateurs','id_clients')->withPivot('horaire');
    }
}
