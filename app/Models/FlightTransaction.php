<?php

namespace App\Models;

use App\Models\Aircraft;
use App\Models\Passenger;

use App\Models\Flightmaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightTransaction extends Model
{
    use HasFactory;
    protected $table='flighttransactions';
    protected $primarykey='id';
    protected $fillable = [
        'seatnumber',
        'date',
        'fare',
        'passenger_id',
        'flightmaster_id',
        'aircraft_id'
    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }
    public function Flightmaster()
    {
        return $this->belongsTo(Flightmaster::class);
    }
    public function Aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }
 //   public function cancellation(): BelongsTo
  ///  {
    //    return $this->belongsTo(Cancellation::class, 'cancellation_id');
   // }
}

