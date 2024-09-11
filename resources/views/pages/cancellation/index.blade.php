@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Cancellation</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('cancellation.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label> Date </label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-6">
                            <label>Flight Transaction ID</label>
                            <select name="flighttransaction->id" class="form-control">
                                <option value="">Select Flight Transaction ID </option>
                                @foreach($flighttransactions as $flighttransaction)
                                <option value="{{$flighttransaction->id}}" >{{$flighttransaction->id}}</option>
                                @endforeach
                            </select>
                     
                     <div class="container">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Cancel The Booking">
                        </div>

                    </div>
                </form>
            </div>


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
              background-color:#f4f409;
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