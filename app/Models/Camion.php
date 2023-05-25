<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    protected $table='camions';
    public function transporte(){
        return $this->belongsTo('App\Models\Transporte');
    }
}
