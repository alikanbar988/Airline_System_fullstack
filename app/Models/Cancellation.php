<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
    //public function flighttransaction(): HasOne
    ////{
      //  return $this->hasOne(FlightTransaction::class, 'cancellation_id');
   /// }

}
