@extends('layout')

@section('container')
    <section class="main">
            <h2>Mes cercles</h2>
                <section class="publish">
                    <div class="redact">
                        <h5>Rédiger une publication dans un cercle</h4>
                        {{ Form::open() }}
                            {{ Form::textarea('Publication','', array('placeholder' => 'Rédiger une publication (maximum 240 caractères)','id'=>'textarea')); }}
                            <p class="select">{{ Form::label('Publier dans le cercle', 'Publier dans le cercle');}}
                                {{ Form::select('circles', array('Pop' => 'Pop', 'Techno' => 'Techno')); }}</p>
                            {{ Form::submit('Envoyer', array('class' => 'submit')); }}
                        {{ Form::close() }}
                    </div>
                </section>
                <section class="feed">
                    <article class="actuality"> 
                        {{ HTML::image('img/icons/boy-62.png', 'photo du cercle', array('class' => 'photoPublications')); }}    
                        <p class="publications">
                            <span class="who"><a href="/friend">Jérôme Poucet</a></span>
                            <span class="time">Hier à 16h40</span>
                            <span class="where">Dans le cercle <a href="/circle">Techno</a></span>
                        </p>
                        <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta, inventore sequi quaerat necessitatibus earum minima expedita modi eos eius vitae nostrum iusto ducimus quae quia molestiae esse iste ea."
                        </p>
                        <div class="commentaires">
                            <a class="comments" href="#">Aucun commentaire</a><a class="like" href="#">J'aime</a><a class="share" href="#">Partager</a>
                            {{ Form::open() }}
                                {{ Form::text('commentaire', '', array('placeholder' => 'Rédiger un commentaire','class' => 'commentaire'));}}
                                {{ Form::submit('Envoyer', array('class' => 'submit')); }}
                            {{ Form::close() }}
                        </div>
                    </article>
                    <article class="actuality"> 
                        {{ HTML::image('img/icons/boy-62.png', 'photo du cercle', array('class' => 'photoPublications')); }}    
                        <p class="publications">
                            <span class="who"><a href="/friend">Fanny Leclerc</a></span>
                            <span class="time">Hier à 20h30</span>
                            <span class="where">Dans le cercle <a href="/circle">Pop-Rock</a></span>
                        </p>
                        <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, molestiae, in dignissimos dolorem natus maiores assumenda nesciunt vero distinctio optio vitae saepe nulla soluta! Doloremque sunt nobis odio pariatur voluptates."
                        </p>
                        <div class="commentaires">
                            <a class="comments" href="#">Aucun commentaire</a><a class="like" href="#">J'aime</a><a class="share" href="#">Partager</a>
                            {{ Form::open() }}
                                {{ Form::text('commentaire', '', array('placeholder' => 'Rédiger un commentaire','class' => 'commentaire'));}}
                                {{ Form::submit('Envoyer', array('class' => 'submit')); }}
                            {{ Form::close() }}
                        </div>
                    </article>
                    <article class="actuality"> 
                        {{ HTML::image('img/icons/boy-62.png', 'photo du cercle', array('class' => 'photoPublications')); }}    
                        <p class="publications">
                            <span class="who"><a href="/friend">Maxime Robert</a></span>
                            <span class="time">Aujourd'hui à 10h23</span>
                            <span class="where">Dans le cercle <a href="/circle">Deep House</a></span>
                        </p>
                        <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, molestiae, in dignissimos dolorem natus maiores assumenda nesciunt vero distinctio optio vitae saepe nulla soluta! Doloremque sunt nobis odio pariatur voluptates."
                        </p>
                        <div class="commentaires">
                            <a class="comments" href="#">Aucun commentaire</a><a class="like" href="#">J'aime</a><a class="share" href="#">Partager</a>
                            {{ Form::open() }}
                                {{ Form::text('commentaire', '', array('placeholder' => 'Rédiger un commentaire','class' => 'commentaire'));}}
                                {{ Form::submit('Envoyer', array('class' => 'submit')); }}
                            {{ Form::close() }}
                        </div>
                    </article>
                    <article class="actuality"> 
                        {{ HTML::image('img/icons/boy-62.png', 'photo du cercle', array('class' => 'photoPublications')); }}    
                        <p class="publications">
                            <span class="who"><a href="/friend">Jérémy Thiry</a></span>
                            <span class="time">Aujourd'hui à 12h40</span>
                            <span class="where">Dans le cercle <a href="/circle">Deep House</a></span>
                        </p>
                        <p class="content">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, molestiae, in dignissimos dolorem natus maiores assumenda nesciunt vero distinctio optio vitae saepe nulla soluta! Doloremque sunt nobis odio pariatur voluptates."
                        </p>
                        <div class="commentaires">
                            <a class="comments" href="#">Aucun commentaire</a><a class="like" href="#">J'aime</a><a class="share" href="#">Partager</a>
                            {{ Form::open() }}
                                {{ Form::text('commentaire', '', array('placeholder' => 'Rédiger un commentaire','class' => 'commentaire'));}}
                                {{ Form::submit('Envoyer', array('class' => 'submit')); }}
                            {{ Form::close() }}
                        </div>
                    </article>
                </section>
    </section>
@stop