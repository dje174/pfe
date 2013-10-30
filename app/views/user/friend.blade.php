@extends('layout')

@section('container')
    <section class="main">
        <h2>Prénom Nom</h2>
        <div class="content-zone">
            {{ HTML::image('img/icons/boy-256.png', 'photo de profil', array('class' => 'photoProfil')); }}
            <h3>À propos</h3>
            <article class="informations">
                <p>Prénom</p>
                <p>Nom</p>
                <p>Date de naissance</p>
                <p>Email</p>
                {{ Form::submit('Demande d\'amitié', array('class' => 'modify add')); }}
            </article>

            <h3>Ses cercles</h3>
            <article class="informations">
                <p><a href="/circle">Jazz</a></p>
                <p><a href="/circle">Hip-Hop</a></p>
                <p><a href="/circle">Techno</a></p>
                <p><a href="/circle">Funk</a></p>
            </article>

            <h3>Ses amis</h3>
            <article class="informations">
                <p><a href="/user/friend">Matthieu L</a></p>
                <p><a href="/user/friend">Fanny D</a></p>
            </article>

            <h3>Ses dernières publications</h3>
                <article class="informations sous">
                    <span><a href="/user/friend">Prénom</a> à publié dans le cercle <a href="/circle">Techno</a></span>
                    <p>"Découvrez la nouvelle compo de Raving George</p>
                    <a href="https://soundcloud.com/ravinggeorge/monodon">Par ici</a>"
                </article>
                <article class="informations sous">
                    <span><a href="/user/friend">Prénom</a> à publié dans le cercle <a href="/circle">Dubstep</a></span>
                    <p>"Découvrez la nouvelle compo de Doctor P avec Redman</p>
                    <a href="https://soundcloud.com/circusrecords/sets/doctor-p-and-adam-f-the-pit">Par ici</a>"
                </article>
        </div>
    </section>
@stop
