@extends('layout')

@section('container')
    <section class="main">
        <h2>Se connecter</h2>
        <h3>Déjà inscrit? Connectez vous sans plus attendre ou <a href="register" title="S'inscrire">inscrivez-vous</a></h3>
        <div id="register" class="forms">
            {{ Form::open() }}
                <h4>{{ Form::label('email', 'Adresse électronique');}}</h4>
                {{ Form::text('email', 'Adresse électronique', array('class' => 'block'));}}
                <h4>{{ Form::label('pwd', 'Mot de passe');}}</h4>
                {{ Form::password('pwd', array('class' => 'block'));}}
                <span>{{ Form::checkbox('StayConnect', 'Rester connecté'); }} Je souhaite rester connecté</span>
                {{ Form::submit('Se connecter', array('class' => 'block', 'id' => 'submit')); }}
            {{ Form::close() }}
        </div>
    </section>
@stop