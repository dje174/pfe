@extend('layout')

@section('container')
    <section class="main">
        <h2>Modification du profil</h2>
        <div class="content-profil">
            {{ Form::model($user, array('method' => 'PATCH', 'files' => true, 'route' => array('user.update',$user->$id))) }}
                {{ Form::hidden('id', Auth::user()->id) }}
                {{ Form::label('first_name','Votre prénom').Form::text('first_name',Auth::user()->first_name) }}
                {{ Form::label('name','Votre nom').Form::text('name',Auth::user()->name) }}
                {{ Form::label('email','Votre e-mail').Form::text('email',Auth::user()->email) }}
                {{ Form::submit('Valider la modification', array('class' => 'submit')) }}
            {{ Form::close() }}

        </div>
    </section>
@stop