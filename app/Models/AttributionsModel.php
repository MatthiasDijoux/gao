<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributionsModel extends Model
{
    use HasFactory;
    protected $table = "attributions";
    protected $fillable = [
        'horaire', 'date'
    ];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(ClientsModel::class, 'id_clients');
    }
    public function ordinateur()
    {
        return $this->belongsTo(OrdinateursModel::class, 'id_ordinateurs');
    }
}
