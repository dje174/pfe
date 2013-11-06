@extends('layout')

@section('container')
    <section class="main">
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif
            <h2>Bienvenue sur Music Circles</h2>
            <h3>Écouter, partager, découvrir entre amis</h3>
            <div id="description">
                 <p>Parcourez les différents cercles et abonnez vous pour avoir accès à toute la musique que vous appréciez.</p>
                 <p>Écouter, partager, découvrir, c'est ce que Music Circles représente.</p>
                 <p>Trouvez vos amis et partagez vos coups de coeurs musicaux avec.</p>
                 <p>Rédigez des posts dans le cercle de votre choix.</p>
            </div>
            <div id="icones">
                <article class="presentation">
                    {{ HTML::image('img/icons/Monitor-128.png'); }}
                    <h5 class="icons">Connecter</h5>
                </article>
                <article class="presentation">
                    {{ HTML::image('img/icons/Upload-128.png'); }}
                    <h5 class="icons">Uploader</h5>
                </article>
                <article class="presentation">
                    {{ HTML::image('img/icons/Headphone-128.png'); }}
                    <h5 class="icons">Écouter</h5>
                </article>
                <article class="presentation">
                    {{ HTML::image('img/icons/Share-128.png'); }}
                    <h5 class="icons">Partager</h5>
                </article>
                <article class="presentation">
                    {{ HTML::image('img/icons/Heart-128.png'); }}
                    <h5 class="icons">Découvrir</h5>
                </article>
            </div>
    </section>
@stop