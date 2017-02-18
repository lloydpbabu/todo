<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todoController extends Controller
{
    public function save(Request $request)
    {
        $todo= new Todo;
        $todo->task=$request->task;
        $todo->save();

    }
    public function view()
    {
        $todo=new Todo;
        $todos=$todo->all();
        return view('show',['todos'=>$todos]);
    }
    public function delete($id)
    {
        $todo= Todo::find($id);
        $todo->delete();
        return back();
        
    }
    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('edit',['todo'=>$todo]);
            }
            public function update(Request $request)
            {
                $todo= Todo::find($request->id);
        $todo->task=$request->task;
        $todo->desc=$request->desc;
                $todo->save();
               
            }
}
