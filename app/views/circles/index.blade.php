@extends('layout')

@section('container')
    <section class="main">
        <h2>Les cercles</h2>
        <h3>À quoi ça sert? Que cela réprésente-il?</h3>
        <div class="content">
            <h4>Qu'est-ce qu'un cercle?</h4>
            <p>Un cercle représente un genre de musique, chaque utilisateur peut s'abonner à un cercle pour ensuite retrouver les derniers posts de ce cercle dans son fil d'actualité</p>
            <p>L'utilisateur à également le choix entre regarder le fil d'actualité de ses cercles avec tous les posts effectués dans ses cercles dont il est abonné et regarder le fil d'actualité des cercles de ses amis avec tous les posts effectués par ses amis dans les cercles dont il sont abonnés</p>
            <h4>Les cercles à la une</h4>
                <div class="content-zone">
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle1.png'); }}                    
                            <figcaption class="cache">House Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle2.png'); }}            
                            <figcaption class="cache">Glam Rock Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle3.png'); }}
                            <figcaption class="cache">Rap US Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle4.png'); }}
                            <figcaption class="cache">Électro-Pop Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle5.png'); }}
                            <figcaption class="cache">Hard Rock Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle6.png'); }}
                            <figcaption class="cache">Flamenco Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle7.png'); }}
                            <figcaption class="cache">Slam Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle8.png'); }}
                            <figcaption class="cache">Trap Circle</figcaption>
                        </figure>
                    </a>
                    <a href="/circle">
                        <figure class="tuiles">
                        {{ HTML::image('img/tuiles/cercle10.png'); }}
                            <figcaption class="cache">Drum And Bass Circle</figcaption>
                        </figure>
                    </a>
                </div>
        </div>
    </section>
@stop