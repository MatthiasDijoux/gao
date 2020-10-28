<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdinateursModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "ordinateurs";
    protected $fillable = [
        'nom',
    ];
    public $timestamps = false;

    public function attributions()
    {
        return $this->hasMany(AttributionsModel::class, 'id_ordinateurs');
    }
}
