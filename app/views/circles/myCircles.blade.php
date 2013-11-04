@extends('layout')

@section('container')
    <section class="main">
            <h2>Mes cercles</h2>
            <div class="content-zone"> 
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-256.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span> Il y a 10min, <a href="/friend">Djé</a> à publié dans le cercle <a href="/circle">Techno</a></span>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                    </p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-256.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span> Il y a 16min, <a href="/friend">Fanny</a> à publié dans le cercle <a href="/circle">Hip-Hop</a></span>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                    </p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-32.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span><a href="/friend">Fanny</a> s'est également abonné au cercle <a href="/circle">Minimale</a></span></p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-256.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span> Il y a 1h, <a href="/friend">Matthieu</a> à publié dans le cercle <a href="/circle">Funk</a></span>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                    </p>
                </article>
                <article class="informations sous2"> 
                {{ HTML::image('img/icons/circle-32.png', 'photo du cercle', array('class' => 'photoProfil')); }}              
                    <p class="publications"><span><a href="/friend">Matthieu</a> s'est également abonné au cercle <a href="/circle">Deep House</a></span></p>
                </article>
            </div>
    </section>
@stop