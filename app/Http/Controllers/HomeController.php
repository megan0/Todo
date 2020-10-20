<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class HomeController extends Controller
{
    public function index()
    {
    
        return view('todo.index')->with('todo',todo::all());
    }

    public function show(Todo $todo){
        return view('todo.show')->with('todo',$todo);
    }

    public function create(){
        return view('todo.create');
    }

    public function create_new(){

        $this->validate(request(),[
            'name'=>'required|min:6|max:15',
            'description'=>'required'
        ]);
        $data= request()->all();
        $todo=new todo();

        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=false;

        $todo->save();

        session()->flash('success','Created successfuly');

        return redirect('home');

    }

    public function edit(Todo $todo){

        return view('todo.edit')->with('todo',$todo);

    }

    public function update(){

        $this->validate(request(),[
            'name'=>'required|min:6|max:15',
            'description'=>'required'
        ]);

        $data= request()->all();
        $todo=todo::find($data['id']);

        $todo->name=$data['name'];
        $todo->description=$data['description'];

        $todo->save();
        session()->flash('success','Updated successfuly');


        return redirect('home');


    }

    public function delete(Todo $todo){

        $todo->delete();
        session()->flash('success','Deleted successfuly');

        return redirect('home');

    }


    public function complete(Todo $todo){

        $todo->completed=true;

        $todo->save();

        session()->flash('success', 'Todo completed successfully');

        return redirect('home');


    }
}
