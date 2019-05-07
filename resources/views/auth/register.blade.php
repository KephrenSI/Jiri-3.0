@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page d'inscription</h2>
    <div class="loginContainer__filter">
        <span class="notEmpty">&nbsp;</span>
    </div>

    <div class="globalCard">
        <div class="intro">
            <img class="intro__logo" src="../images/logoBlanc.png" alt="logo de l'application Jiri" height="100" width="200"/>
            <figcaption class="intro__slogan">{{ __('Votre cahier de cotation électronique !') }}</figcaption>
        </div>

        <div class="card">
            <div class="card__header">{{ __('Inscription') }}</div>

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
                        <password-input></password-input>
                    </div>

                    <div class="labelInput">
                        <label for="password-confirm" class="labelInput__label label">{{ __('Confirmer le mot de passe') }}</label>
                        <confirm-password-input></confirm-password-input>
                    </div>

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('S\'inscrire') }}
                        </button>
                        <span class="loginErrors">
						    {{ $errors->first() }}
					    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
