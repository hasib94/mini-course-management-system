@extends('base')


@section('content')
   
    <section id="login">
        <div class="mid-panel">
            <h1 class="main-title"> COURSE FILE UPLOADING SYSTEM </h1>
            @if (session('invalid'))
            <div class="alert alert-warning">
                {{ session('invalid') }}
            </div>
            @endif

            @if( count($errors) > 0 ) 
                @foreach( $errors->all() as $error)
                    <h4>{{ $error }}</h4>
                @endforeach
            @endif  
            <div class="login-panel">
                {!! Form::open(['url' => 'signin','class' => 'form-horizontal']) !!}
                
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail Address', array('class' => 'col-sm-3')) !!}
                    <div class="col-sm-9">
                        {!! Form::text('email', 'example@gmail.com',['class' => 'form-control form-bs']) !!}
                    </div>
                    
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'password', array('class' => 'col-sm-3')) !!}
                    <div class="col-sm-9">
                        {!! Form::password('password',['class' => 'form-control form-bs']) !!}
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        {!! Form::submit('Submit',['class' => 'btn btn-default btn-bs']) !!}   
                    </div>
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    
@endsection