@extends ('layouts.teste')

@section('title', 'Criar lembrete')

@section('title-content', 'Anotações!')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Criar Lembrete</h1>
            {!! Form::open(['route' => 'task.store', 'method' => 'POST'])!!}

                @component('components.taskForm')
                @endcomponent
                
            {!! Form::close() !!}
        </div>
    </div>


@endsection