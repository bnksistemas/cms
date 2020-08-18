@extends('connect.plantilla')

@section('title','login')
    
@section('content')
<div class='box box_login shadow'>
    <div class="header">
        <a href="{{url('/')}}" >
            <img src="{{ url('/static/images/logo.png')}}" width="70%" alt="">
        </a>
    </div>

    <div class="inside">
        {!! Form::open(['url'=>'/login']) !!}
        <label for="email">Correo Electrónico cualquiera:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>    
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <label for="email" class='mtop16'>Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>    
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}
        <div class="mtop16 footer">
            <a href="{{url('/register')}}" >no tienes una cuenta?, Regístrte</a> 
            <a href="{{url('/recover')}}" >Recuperar Contraseña</a> 
        </div>

    </div>
</div>

@stop