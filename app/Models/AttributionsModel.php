<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributionsModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "attributions";
    protected $fillable = [
        'horaire',
    ];
    public $timestamps = false;
    
}
