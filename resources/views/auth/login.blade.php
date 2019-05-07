@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page de connexion</h2>
    <div class="loginContainer__filter">
        <span class="notEmpty">&nbsp;</span>
    </div>

    <div class="globalCard">
        <div class="intro">
            <img class="intro__logo" src="../images/logoBlanc.png" alt="logo de l'application Jiri" height="100" width="200"/>
            <figcaption class="intro__slogan">{{ __('Votre cahier de cotation électronique !') }}</figcaption>
        </div>
        <div class="card">
            <div class="card__header">{{ __('Connexion') }}</div>

            <div class="card__body">
                <form method="POST" action="{{ route('login') }}" class="form">
                    @csrf

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="labelInput">
                        <label for="password" class="labelInput__label label">{{ __('Mot de passe') }}</label>
                        <password-input></password-input>
                    </div>

                    <div class="labelInput">
                        <input class="labelInput__input--checkbox input--checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="labelInput__label--checkbox label--checkbox" for="remember">
                            {{ __('Se souvenir de moi') }}
                        </label>
                    </div>

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('Connexion') }}
                        </button>
                        <span class="loginErrors">
						    {{ $errors->first() }}
					    </span>
                        @if (Route::has('password.request'))
                            <a class="labelInput__link" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
