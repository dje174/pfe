@extends('layout')

@section('container')
    <section class="main">
        <h2>{{ Auth::user()->first_name }} {{ Auth::user()->name }}</h2>
        <div class="content-profil">
            {{ HTML::image('img/icons/boy-256.png', 'photo de profil', array('class' => 'photoProfil')); }}
            <h3>À propos</h3>
            <article class="informationsProfil">
                <p>{{ Auth::user()->first_name }}</p>
                <p>{{ Auth::user()->name }}</p>
                <p>{{ Auth::user()->email }}</p>
                {{ Form::submit('Modifier mon profil', array('class' => 'modify')); }}
                @if(Auth::check())
                        {{ HTML::linkAction('UserController@update', 'Modifier') }}
                @endif
            </article>

            <h3>Mes cercles</h3>
            <article class="informationsProfil">
                <p><a href="/circle">Jazz</a></p>
                <p><a href="/circle">Hip-Hop</a></p>
                <p><a href="/circle">Techno</a></p>
                <p><a href="/circle">Funk</a></p>
                {{ Form::submit('Gérer mes cercles', array('class' => 'modify')); }}
            </article>

            <h3>Mes amis</h3>
            <article class="informationsProfil">
                <p><a href="/friend">Matthieu L</a></p>
                <p><a href="/friend">Fanny D</a></p>
                {{ Form::submit('Gérer mes amis', array('class' => 'modify')); }}
            </article>

            <h3>Mes dernières publications</h3>
                <article class="informationsProfil sous">
                    <span><a href="/friend">Djé</a> à publié dans le cercle <a href="/circle">Techno</a></span>
                    <p>"Découvrez la nouvelle compo de Raving George</p>
                    <a href="https://soundcloud.com/ravinggeorge/monodon">Par ici</a>"
                </article>
                <article class="informationsProfil sous">
                    <span><a href="/friend">Djé</a> à publié dans le cercle <a href="/circle">Dubstep</a></span>
                    <p>"Découvrez la nouvelle compo de Doctor P avec Redman</p>
                    <a href="https://soundcloud.com/circusrecords/sets/doctor-p-and-adam-f-the-pit">Par ici</a>"
                </article>
        </div>
    </section>
@stop