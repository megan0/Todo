@extends('layout.app')

@section('content')
    
    <h1 class="text-center my-5">Create Todo</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create new Todo
                </div>
                <div class="card-body">
                    <form action='create-new' method='GET'>
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
                        <div class="form-group">
                            <input type="text" class="form-control" name='name'>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="d" cols="7" rows="5" class="form-control"></textarea>
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