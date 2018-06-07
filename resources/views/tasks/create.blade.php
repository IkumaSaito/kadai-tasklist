@extends('layouts.app')

@section('content')

<h1>タスク新規追加ページ</h1>
 <div class="row">
        <div class="col-xs-6">
   {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('task', ' タスク:') !!}
                    {!! Form::text('task', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('status', '状況:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
    </div>
</div>
@endsection