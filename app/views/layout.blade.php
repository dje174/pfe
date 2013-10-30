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
       @if (Auth::check())
            <nav>
                <ul>
                    <li><span>{{ link_to_route('myHome','Accueil') }}</span></li>
                    <li><span>{{ link_to_route('myCircles','Mes cercles') }}</span></li>
                    <li><span>{{ link_to_route('myFriendsCircles','Mes amis') }}</span></li>
                    <li><span>{{ link_to_route('settings','Paramètres') }}</span></li>
                    <li><span>{{ link_to_route('profile','Mon profil') }}</span></li>
                    <li><span>{{ link_to_route('logout','déconnecter') }}</span></li>
                </ul>
            </nav>
        @else
            <nav>
                <ul>
                    <li><span>{{ link_to_route('home','Accueil') }}</span></li>
                    <li><span>{{ link_to_route('register','S\'inscrire') }}</span></li>
                    <li><span>{{ link_to_route('login','Connexion') }}</span></li>
                    <li><span>{{ link_to_route('circles','Les cercles') }}</span></li>
                    <li><span>{{ link_to_route('about','À propos') }}</span></li>
                </ul>
            </nav>
        @endif
    </header>
    <section class="main">
        @yield('container')
    </section>
    <footer>
        
    </footer>
</body>
</html>