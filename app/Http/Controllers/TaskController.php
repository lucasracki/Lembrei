<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('date', 'asc')-> paginate(5);

        return view('tasks.index')->with('tasks', $tasks);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar os dados
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'date' => 'required|date', 
        ]);

        //criar novo lembrete
        $task = new Task;
        
        //atribuir os dados
        $task->name = $request->name;
        $task->description = $request->description;
        $task->date = $request->date;

        //salvar lembrete
        $task->save();

        //mensagem de sucesso
        Session::flash('success', 'Anotação criada!');

        //retornar
        return redirect()->route('task.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $task->dateFormatting = false;

        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar os dados
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'date' => 'required|date', 
        ]);

        //encontrar a relação do lembrete
        $task = Task::find($id);
        
        //atribuir os dados
        $task->name = $request->name;
        $task->description = $request->description;
        $task->date = $request->date;

        //salvar lembrete
        $task->save();

        //mensagem de sucesso
        Session::flash('success', 'Anotação salva!');

        //retornar
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        Session::flash('success', 'Lembrete Excluído!');

        return redirect()->route('task.index');
    }
}
