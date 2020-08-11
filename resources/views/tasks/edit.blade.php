@extends ('layouts.teste')

@section('title', 'Editar lembrete')

@section('title-content', 'Anotações!')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Editar Lembrete</h1>
            {!! Form::model( $task, ['route' => ['task.update', $task->id], 'method' => 'PUT'])!!}

                @component('components.taskForm')
                @endcomponent
                
            {!! Form::close() !!}
        </div>
    </div>


@endsection