@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Passenger Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('passenger.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age">

                        </div>
                        
                    </div>
                
                        <div class="col-md-12">
                            <label>Gender</label>
                            <select class="form-select" aria-label="Default select Example">
                                <option selected>open this selected menu </option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                </select>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">

                        </div>
                    </div>
                  
                    </div>
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
                        <th scope="col"> Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">phone</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $Passengers as $key => $Passenger )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $Passenger->name }}</td>
                            <td scope="col">{{ $Passenger->age}}</td>
                            <td scope="col">{{ $Passenger->gender}}</td>
                            <td scope="col">{{ $Passenger->phone }}</td>
                            <td scope="col">

                            <a href="{{  route('passenger.edit', $Passenger->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('passenger.destroy', $Passenger->id) }}" method="POST" style ="display:inline">
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