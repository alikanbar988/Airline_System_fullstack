<?php

namespace App\Models;

use App\Models\FlightTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flightmaster extends Model
{
    use HasFactory;
    protected $table='flightmasters';
    protected $primarykey='id';
    protected $fillable = [
        'DepartureCity',
        'ArrivalCity',
        'DepartureTime',
        'ArrivalTime'
    ];
    public function FlightTransaction()
    {
        return $this->hasMany(FlightTransaction::class);
    }


}
