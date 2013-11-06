@extends('layout')

@section('container')
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif
    <section class="main">
        @if (Session::has('flash_error'))
            <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif
        <h2>Se connecter</h2>
        <h3>Déjà inscrit? Connectez vous sans plus attendre ou <a href="register" title="S'inscrire">inscrivez-vous</a></h3>
        <div id="register" class="forms">
            {{ Form::open(array( 'url' => 'login' , 'method' => 'POST' )); }}
                <h4>{{ Form::label('email', 'Adresse électronique');}}</h4>
                {{ Form::text('email', '', array('class' => 'block','placeholder' => 'Votre adresse électronique'));}}
                <h4>{{ Form::label('password', 'Mot de passe');}}</h4>
                {{ Form::password('password', array('class' => 'block'));}}
                <span id="stayConnect">{{ Form::checkbox('StayConnect', 'Rester connecté'); }} Je souhaite rester connecté</span>
                {{ Form::submit('Se connecter', array('class' => 'submit')); }}
            {{ Form::close() }}
        </div>
    </section>
@stop