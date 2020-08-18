@extends('connect.plantilla')

@section('title','Registrarse')
    
@section('content')
<div class='box box_register shadow'>
    <div class="header">
        <a href="{{url('/')}}" >
            <img src="{{ url('/static/images/logo.png')}}">
        </a>
    </div>

    <div class="inside">
        {!! Form::open(['url'=>'/register']) !!}
       
        <label for="name">Nombre:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-lock"></i></div>
            </div>    
            {!! Form::email('name',null,['class'=>'form-control']) !!}
        </div>
       
        <label for="lastname" class="mtop16">Apellido:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
            </div>    
            {!! Form::email('lastname',null,['class'=>'form-control']) !!}
        </div>
       
       
        <label for="email" class="mtop16">Correo Electrónico:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>    
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <label for="password" class='mtop16'>Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>    
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <label for="cpassword" class='mtop16'>Confirmar Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>    
            {!! Form::password('cpassword',['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Registrarse', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}
        <div class="mtop16 footer">
            <a href="{{url('/login')}}" >Ya tengo una cuenta?, Ingresar</a> 
        </div>

    </div>
</div>

@stop