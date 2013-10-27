@extends('layout')

@section('container')
    <section class="main">
        <h2>À propos de Music Circles</h2>
        <h3>En savoir un peu plus</h3>
        <div class="content">
            <h4>Qu'est-ce que c'est?</h4>
                <p>Music Circles est un réseau social axé sur la musique où chaque genre musical est représenté par un cercle.</p>
            <h4>À la base</h4>
                <p>Music Circles est à la base un projet scolaire, un projet de fin d'études développé avec le framework <a href="www.laravel.com">Laravel</a>. Par Jérôme Poucet, étudiant en 3ième année à la Haute École de la Province de Liège à Seraing en Infogrpahie, spécialisation web.</p>
            <h4>Conditions d'utilisations</h4>
                <p>L’utilisateur ajoute des amis et s’abonne à des cercles qui représentent un genre musical. Chaque utilisateur peut poster un message (comme sur un blog) de maximum 240 caractères ainsi qu’uploader une chanson dans un cercle approprié au genre.</p>
                <p>Le fait que chaque utilisateur puisse uploader tout ce qu'il veut est une contrainte, tant au niveau de l'hébergement que par rapport aux droits d'auteurs. C'est pourquoi si l'utilisateur veut partager des chansons d'artistes tiers, il devra posséder les droits sous peine de voir sa publication modérée et supprimée. Seules les chansons de maximum 10min sont autoriser à l'upload</p>
                <p>Par contre si l'utilisateur veut partager une chanson qu'il a créé et dont il possède tous les droits, il peut alors l'uploader directement sur le site. Par contre les uploads seront modérés et vérifier pour être sur que les utilisateurs n'enfreignent pas les droits d'auteurs de compositeurs tiers.</p>
        </div>
    </section>
@stop