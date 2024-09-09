<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FlightTransaction;

class Aircraft extends Model
{
    use HasFactory;
    protected $table='aircrafts';
    protected $primarykey='id';
    protected $fillable = [
      'Aircraftnumber',
       'model'
    ];

public function FlightTransaction()
{
    return $this->hasMany(FlightTransaction::class);
}
}
