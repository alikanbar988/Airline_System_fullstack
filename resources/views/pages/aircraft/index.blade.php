@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Aircraft</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('aircraft.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Aircraft number</label>
                            <input type="text" class="form-control" name="Aircraftnumber">
                        </div>
                        <div class="col-md-6">
                            <label>Model</label>
                            <input type="text" class="form-control" name="model">

                        </div>
                        
                    </div>
                
                    </div>
                  
                    </div>
                    <div class="container">
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
                        <th scope="col"> Aircraft number</th>
                        <th scope="col">Model</th>
                       
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $aircrafts as $key => $aircraft )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $aircraft->Aircraftnumber }}</td>
                            <td scope="col">{{ $aircraft->model}}</td>
                            
                            <td scope="col">

                            <a href="{{  route('aircraft.edit', $aircraft->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('aircraft.destroy', $aircraft->id) }}" method="POST" style ="display:inline">
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