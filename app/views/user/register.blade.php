@extends('layout')

@section('container')
    <section class="main">
        <h2>S'inscrire</h2>
        <h3>En toute simplicité et gratuité (bien sûr)</h3>
        <div id="register" class="forms">
            {{ Form::open() }}
                <h4>{{ Form::label('Coordonées', 'Coordonées');}}</h4> 
                {{ Form::text('Prénom', 'Prénom', array('class' => 'block'));}}
                {{ Form::text('Nom', 'Nom', array('class' => 'block'));}}
                {{ Form::text('E-mail', 'Adresse électronique', array('class' => 'block'));}}
                {{ Form::text('E-mail', 'Confirmez adresse électronique', array('class' => 'block'));}}
                 <h4>{{ Form::label('Mdp', 'Mot de passe');}}</h4>
                {{ Form::password('password', array('class' => 'block'));}}
                {{ Form::password('password', array('class' => 'block'));}}
                 <h4>{{ Form::label('date_naissance', 'Date de naissance');}}</h4>
                 {{ Form::select('day', array('1','2','3','4', '5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31')); }}
                {{ Form::select('month', array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre')); }}
                {{ Form::select('year', array('2013','2012','2011','2010', '2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999','1998','1997','1996','1995','1994','1993','1992','1991','1990','1989','1988','1987','1986','1985','1984','1983')); }}
                <span>{{ Form::radio('Homme', 'Homme'); }} Homme
                            {{ Form::radio('Femme', 'Femme'); }} Femme</span>
                <span>{{ Form::checkbox('Validate', 'Validate'); }} En validant l'inscription, vous acceptez <a href="/about">Conditions d'ulisations</a> de Music Circles et affirmez que vous avez lu notre politique sur l'utilisation des données et utilisation des cookies</span>
                {{ Form::submit('Valider l\'inscription', array('class' => 'block', 'id' => 'submit')); }}
            {{ Form::close() }}
        </div>
    </section>
@stop