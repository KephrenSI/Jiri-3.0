@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page de vérification</h2>
    <div class="connexion">
        <div class="logo">
            <img class="intro__logo" src="../images/logoCouleur.png" alt="logo de l'application Jiri" height="60" width="120"/>
            {{--<figcaption class="intro__slogan">{{ __('Votre cahier de cotation électronique !') }}</figcaption>--}}
        </div>
        <div class="card">
            <div class="card__header">
                <h3 class="heading3" role="heading" aria-level="3">{{ __('Vérifier l\'adresse mail') }}</h3>
            </div>

            <div class="card__body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                    </div>
                @endif

                {{ __('Avant de continuer, veuillez vérifier votre courrier électronique pour un lien de vérification.') }}
                {{ __('Si vous n\'avez pas reçu l\'email') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour demander un autre') }}</a>.
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
