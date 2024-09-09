<?php

namespace App\Models;

use App\Models\FlightTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passenger extends Model
{
    use HasFactory;
    protected $table='passengers';
    protected $primarykey='id';
    protected $fillable = [
        'name',
        'age',
        'gender',
        'phone'
    ];
    public function FlightTransaction()
    {
        return $this->hasMany(FlightTransaction::class);
    }


}
