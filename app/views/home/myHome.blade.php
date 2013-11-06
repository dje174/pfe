@extends('layout')

@section('container')

    <section class="main">    
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif
        <h2>De retour sur music Circles</h2>
        <h3>Concentré d'actualités</h3>

            <div class="content-zone"> 
                <h4>Les dernières actus dans vos cercles</h4>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-256.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span> Il y a 10min, <a href="/friend">Djé</a> à publié dans le cercle <a href="/circle">Techno</a></span>
                        <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                    </p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-32.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span><a href="/friend">Fanny</a> s'est également abonné au cercle <a href="/circle">Minimale</a></span></p>
                </article>
                <a href="my-circles" class="plus">Afficher plus</a>
            </div>

            <div class="content-zone">
                <h4>Les dernières actus de vos amis</h4> 
                <article class="informations sous2"> 
                    {{ HTML::image('img/icons/circle-256.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                        <p class="publications"><span> Il y a 9min, <a href="/friend">Sarah</a> à publié dans le cercle <a href="/circle">Musique Orientale</a></span>
                            <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                        </p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-32.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span><a href="/friend">Paul</a> s'est abonné au cercle <a href="/circle">Métal</a></span></p>
                </article>
                <a href="my-friends-circles" class="plus">Afficher plus</a>
            </div>

            <div id="suggestions">
            <h4>Les cercles qui pourraient vous intéresser </h4>
                <div class="tuiles">
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