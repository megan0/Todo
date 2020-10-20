@extends('layout.app')

@section('title')
 Details
@endsection

@section('content')

    <h1 class="text-center my-5">{{$todo->name}}</h1>
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h1>Details</h1>
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                    </div>
                    
                </div>
                <a href='/home/{{$todo->id}}/edit' class="btn btn-info my-2">Edit</a>
                <a href='/home/{{$todo->id}}/delete' class="btn btn-danger my-2">Delete</a>

            </div>
    </div>

@endsection