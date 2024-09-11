@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">flighttransaction</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('flighttransaction.update', $flighttransaction->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                  <div class="row">
                    <div class="col-md-6">
                        <label>Seat Number</label>
                        <input type="text" class="form-control" name="seatnumber">
                    </div>
                    <div class="col-md-6">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date">

                    </div>
                    
                </div>
            
                  
                <div class="row">
                    <div class="col-md-12">
                        <label>Fare</label>
                        <input type="text" class="form-control" name="fare">

                    </div>
                </div>
                <div class="col-md-6">
                    <label>Passenger</label>
                    <select name="passenger_id" class="form-control">
                        <option value="">Select passenger</option>
                        @foreach($passengers as $passenger)
                        <option value="{{$passenger->id}}" >{{$passenger->name}}</option>
                        @endforeach
                    </select>


                    <div class="col-md-6">
                        <label>Flightmaster</label>
                        <select name="flightmaster_id" class="form-control">
                            <option value="">Select flightmaster</option>
                            @foreach($flightmasters as $flightmaster)
                            <option value="{{$flightmaster->id}}" >{{$flightmaster->id}}</option>
                            @endforeach
                        </select>


                        <div class="col-md-6">
                            <label>Aircraft</label>
                            <select name="aircraft_id" class="form-control">
                                <option value="">Select aircraft</option>
                                @foreach($aircrafts as $aircraft)
                                <option value="{{$aircraft->id}}" >{{$aircraft->Aircraftnumber}}</option>
                                @endforeach
                            </select>

              
             
            
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
    @endpush
