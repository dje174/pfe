<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil | Music Circles</title>
    {{ HTML::style('css/screen.css'); }}
</head>
<body>
    <header>
        <div id="logo"><a href="\">{{ HTML::image('img/MCLogoWhite.png'); }}</a></div>
        <nav>
            <ul>
                <li><span>{{ link_to_route('home','Accueil') }}</span></li>
                <li><span>{{ link_to_route('register','S\'inscrire') }}</span></li>
                <li><span>{{ link_to_route('circles','Les cercles') }}</span></li>
                <li><span>{{ link_to_route('about','À propos') }}</span></li>
            </ul>
        </nav>
    </header>
    <section class="main">
        @yield('container')
    </section>
    <footer>
        
    </footer>
</body>
</html>