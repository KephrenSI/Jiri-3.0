@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page de connexion</h2>
    <div class="connexion">
        <div class="logo">
            <img class="intro__logo" src="../images/logoCouleur.png" alt="logo de l'application Jiri" height="60" width="120"/>
            {{--<figcaption class="intro__slogan">{{ __('Votre cahier de cotation électronique !') }}</figcaption>--}}
        </div>
        <div class="card">
            <div class="card__header">
                <h3 class="heading3" role="heading" aria-level="3">{{ __('Connexion à votre compte') }}</h3>
            </div>
            <div class="card__body">
                <form method="POST" action="{{ route('login') }}" class="form">
                    @csrf

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="labelInput">
                        <label for="password" class="labelInput__label label">{{ __('Mot de passe') }}</label>
                        {{--<password-input></password-input>--}}
                        <input id="password" type="password" class="labelInput__input input" name="password" value="{{ old('password') }}">
                    </div>

                    <span class="loginErrors">
                        {{ $errors->first() }}
                    </span>

                    <div class="labelInput rememberMe">
                        <input class="labelInput__input--checkbox input--checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="labelInput__label--checkbox label--checkbox" for="remember">
                            {{ __('Se souvenir de moi') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="labelInput passwordLost">
                            <a class="labelInput__link" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        </div>
                    @endif

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('Connexion') }}
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

        <div class="about__info">
            <h3 class="heading3" role="heading" aria-level="3">{{ __('Salut l\'ami!') }}</h3>
            <p class="about__info--text">
                Jiri est une application qui permet de tenir un jury. Par exemple, les cours de Design Web du 2ème bloc et de Projets Web du 3ème bloc du bachelier en infographie organisé à la Haute École de la Province de Liège se concluent par des jurys lors desquels les travaux des étudiants sont évalués par des externes.
            </p>
        </div>
    </div>
</section>
@endsection
