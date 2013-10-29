@extends('layout')

@section('container')
    <section class="main">
        <h2>Mon profil</h2>
        <div class="content-zone">
            {{ HTML::image('img/icons/boy-256.png', 'photo de profil', array('class' => 'photoProfil')); }}
            <h3>À propos</h3>
            <article class="informations">
                <p>Jérôme</p>
                <p>Poucet</p>
                <p>29.11.1993</p>
                <p>jeromepoucet@gmail.com</p>
                {{ Form::submit('Modifier mon profil', array('class' => 'modify')); }}
            </article>

            <h3>Mes cercles</h3>
            <article class="informations">
                <p><a href="/circle">Jazz</a></p>
                <p><a href="/circle">Hip-Hop</a></p>
                <p><a href="/circle">Techno</a></p>
                <p><a href="/circle">Funk</a></p>
                {{ Form::submit('Gérer mes cercles', array('class' => 'modify')); }}
            </article>

            <h3>Mes amis</h3>
            <article class="informations">
                <p><a href="/user/friend">Matthieu L</a></p>
                <p><a href="/user/friend">Fanny D</a></p>
                {{ Form::submit('Gérer mes amis', array('class' => 'modify')); }}
            </article>

            <h3>Mes dernières publications</h3>
                <article class="informations sous">
                    <span><a href="/user/friend">Djé</a> à publié dans le cercle <a href="/circle">Techno</a></span>
                    <p>"Découvrez la nouvelle compo de Raving George</p>
                    <a href="https://soundcloud.com/ravinggeorge/monodon">Par ici</a>"
                </article>
                <article class="informations sous">
                    <span><a href="/user/friend">Djé</a> à publié dans le cercle <a href="/circle">Dubstep</a></span>
                    <p>"Découvrez la nouvelle compo de Doctor P avec Redman</p>
                    <a href="https://soundcloud.com/circusrecords/sets/doctor-p-and-adam-f-the-pit">Par ici</a>"
                </article>
        </div>
    </section>
@stop