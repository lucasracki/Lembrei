@extends ('layouts.teste')

@section('title', 'Página Inicial')

@section('title-content', 'Início!')

@section('content')


    @if($tasks->count() == 0)
        <p class="lead text-center mb-3">Não há lembretes criados. Para não se esqucer crie um!</p>

        <div class="text-center">
            <img src="{{ asset ('media/Notes-pana.svg')}}" width="400px" height="400px" alt="Crie um lembrete!" class="img-fluid mr-auto">
        </div>

    @else
        @foreach($tasks as $task)
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            Criado <small>{{ $task->created_at }}</small>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                            {{ $task->name}}
                            </h3>
                            
                            <p class="card-text">{{ $task->description}}</p>
                            <hr>
                            {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                    Editar
                                </a>    
                                
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                    Excluir
                                </button>
                            {!! Form::close() !!}
                            
                        </div>
                        <div class="card-footer text-muted">
                            Data definida: <small>{{ $task->date}}</small>

                        </div>
                    </div>
                    
                </div>
            </div>
            <hr>
        @endforeach

    @endif
    

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $tasks->links() }}
        </div>
    </div>
    


@endsection