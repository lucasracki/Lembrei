{{ Form::label('name', 'Nome do Lembrete', ['class' => 'control-label']) }}
{{Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Novo Lembrete'])}}

{{ Form::label('description', 'Descrição', ['class' => 'control-label mt-3']) }}
{{Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição do Lembrete'])}}

{{ Form::label('date', 'Data', ['class' => 'control-label mt-3']) }}
{{ Form::date('date', null, ['class' => 'form-control']) }}

<div class="row justify-content-center mt-3">
  
    <div class="col-sm-4">
        <a href="{{ route('task.index') }}" class="btn btn-block btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Voltar
        </a>
    </div>

    <div class="col-sm-4">
        <button class="btn btn-block btn-primary" type="submit">
            <i class="fas fa-check"></i>
            Salvar
        </button>
    </div>

</div>