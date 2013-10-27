@extends('layout')

@section('container')
    <section class="main">
        <h2>Se connecter</h2>
        <h3>Déjà inscrit? Connectez vous sans plus attendre</h3>
        <div id="register" class="forms">
            {{ Form::open() }}
                <h4>{{ Form::label('Adresse électronique', 'Adresse électronique');}}</h4>
                {{ Form::text('E-mail', 'Adresse électronique', array('class' => 'block'));}}
                <h4>{{ Form::label('Mdp', 'Mot de passe');}}</h4>
                {{ Form::password('password', array('class' => 'block'));}}
                <span>{{ Form::checkbox('StayConnect', 'Rester connecté'); }} Je souhaite rester connecté</span>
                {{ Form::submit('Se connecter', array('class' => 'block', 'id' => 'submit')); }}
            {{ Form::close() }}
        </div>
    </section>
@stop