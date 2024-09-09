<?php

namespace App\Models;

use App\Models\FlightTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cancellation extends Model
{
    use HasFactory;
    protected $table='cancellations';
    protected $primarykey='id';
    protected $fillable = [
      'date',
      'flighttransaction_id'
     
    ];
    public function FlightTransaction()
    {
        return $this->belongsTo(FlightTransaction::class);
    }


}
