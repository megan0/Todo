@extends('layout.app')

@section('content')
    
    <h1 class="text-center my-5">Update Todo</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                    <form action='update_todo' method='GET'>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type='hidden' value='{{$todo->id}}' name='id'>
                        <div class="form-group">
                            <input type="text" class="form-control" name='name' value='{{$todo->name}}'>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="d" cols="7" rows="5" class="form-control">{{$todo->description}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            

        </div>
        
    </div>

    

@endsection