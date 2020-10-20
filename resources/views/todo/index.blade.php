
@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
    <h1 class='text-center my-5'>Home</h1>
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class='card card-default'>
                    <div class='card-header'>
                        <h2>ToDo</h2>
                    </div>
                    <div class='card-body'>
                        <ul class='list-group'>
                            @foreach ($todo as $t)
                                <li class='list-group-item'>
                                    {{$t->name}}
                                    @if(!($t->completed))
                                    <a href='home/{{ $t->id }}/complete' style='color:white' class="btn btn-warning btn-sm float-right">
                                        Completed
                                    </a>
                                    @endif
                                    <a href='home/{{ $t->id }}' class="btn btn-primary btn-sm mr-2 float-right">
                                        View
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>


@endsection