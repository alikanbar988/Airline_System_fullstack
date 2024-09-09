@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">FlightTransaction</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('flighttransaction.store') }}">
                    @csrf
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
                                <option value="{{$flightmaster->id}}" >{{$flightmaster->name}}</option>
                                @endforeach
                            </select>


                            <div class="col-md-6">
                                <label>Aircraft</label>
                                <select name="aircraft_id" class="form-control">
                                    <option value="">Select aircraft</option>
                                    @foreach($aircrafts as $aircraft)
                                    <option value="{{$aircraft->id}}" >{{$aircraft->name}}</option>
                                    @endforeach
                                </select>
    


                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Seat Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Fare</th>
                        <th scope="col">Passenger</th>
                        <th scope="col">Flightmaster</th>
                        <th scope="col">Aircraft</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $flighttransactions  as $key => $flighttransaction )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $flighttransaction->seatnumber }}</td>
                            <td scope="col">{{ $flighttransaction->date}}</td>
                            <td scope="col">{{ $flighttransaction->fare}}</td>
                            <td scope="col">{{ $flightmaster->passenger->name ?? $passenger->name }}</td>
                            <td scope="col">{{ $flightmaster->flightmaster->name ?? $flightmaster->name }}</td>
                            <td scope="col">{{ $flightmaster->aircraft->name ?? $aircraft->name}}</td>
                            <td scope="col">

                            <a href="{{  route('flighttransaction.edit', $flighttransaction->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('flighttransaction.destroy', $flighttransaction->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
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