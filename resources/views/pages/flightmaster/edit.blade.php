@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">FlightMaster</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('flightmaster.update', $flightmaster->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-12">
                            <label>DepartureCity</label>
                            <input type="text" class="form-control" name="DepartureCity">
                        </div>
                        <div class="row">
                        <div class="col-md-13">
                            <label>ArrivalCity</label>
                            <input type="text" class="form-control" name="ArrivalCity">

                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label>DepartureTime</label>
                    <input type="text" class="form-control" name="DepartureTime">
                </div>
            </div>      
                    <div class="col-md-12">
                          <label>ArrivalTime</label>
                         <input type="text" class="form-control" name="ArrivalTime">

                        </div>
                    </div>
                  
                    </div>
                    <div class="container">
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
        .container {
            text-align: center;
            
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