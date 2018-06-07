@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク新規追加ページ</h1>
<div class="row">
        <div class="col-xs-6">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('task', 'タスク:') !!}
                    {!! Form::text('task', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('status', '状況:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
　　 </div>
 </div>
@endsection