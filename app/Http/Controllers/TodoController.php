<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
       return view('create');
    }


    public function store(Request $request)
    {
        DB::table('todo')->insert(
            ['title' => $request->input('title'), 'description' => $request->input('description')]
        );
        $request->session()->flash('success-msg', 'Data Inserted Successfully.');
        return redirect('show');
    }


    public function show(Todo $todo)
    {
        $data = DB::table('todo')->get();
        return view('home', ['data' => $data]);
    }


    public function edit(Todo $todo, $id)
    {
        $data = DB::table('todo')->find($id);
        return view('edit', ['data' => $data]);
    }

   
    public function update(Request $request, Todo $todo)
    {   
        DB::table('todo')->where('id', $request->id)->update(
            ['title' => $request->input('title'), 'description' => $request->input('description')]
        );
        $request->session()->flash('updated-msg', 'Data Updated Successfully.');
        return redirect('show');
    }


    public function destroy(Request $request, Todo $todo, $id)
    {
        DB::table('todo')->where('id',$id)->delete();
        $request->session()->flash('delete-msg', 'Data Deleted Succesfully');
        return redirect('show');
    }
}
