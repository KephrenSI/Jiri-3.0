@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page d'inscription</h2>
    <div class="connexion">
        <div class="logo">
            <img class="intro__logo" src="../images/logoCouleur.png" alt="logo de l'application Jiri" height="60" width="120"/>
            {{--<figcaption class="intro__slogan">{{ __('Votre cahier de cotation électronique !') }}</figcaption>--}}
        </div>
        <div class="card">
            <div class="card__header">
                <h3 class="heading3" role="heading" aria-level="3">{{ __('Inscrivez-vous à Jiri') }}</h3>
            </div>

            <div class="card__body">
                <form method="POST" action="{{ route('register') }}" class="form">
                    @csrf

                    <div class="labelInput">
                        <label for="name" class="labelInput__label label">{{ __('Nom') }}</label>
                        <input id="name" type="text" class="labelInput__input input" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="labelInput">
                        <label for="password" class="labelInput__label label">{{ __('Mot de passe') }}</label>
                        {{--<password-input></password-input>--}}
                        <input id="password" type="password" class="labelInput__input input" name="password" value="{{ old('password') }}">

                    </div>

                    <div class="labelInput">
                        <label for="password-confirm" class="labelInput__label label">{{ __('Confirmer le mot de passe') }}</label>
                        {{--<confirm-password-input></confirm-password-input>--}}
                        <input id="password-confirm" type="password" class="labelInput__input input" name="password-confirm" value="{{ old('password-confirm') }}">
                    </div>

                    <span class="loginErrors">
                        {{ $errors->first() }}
                    </span>

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('S\'inscrire') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about__filter">
            <span class="notEmpty">&nbsp;</span>
        </div>
    </div>
</section>
@endsection
