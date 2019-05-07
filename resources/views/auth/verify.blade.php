@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page de vérification</h2>
    <div class="loginContainer__filter">
        <span class="notEmpty">&nbsp;</span>
    </div>
    <div class="globalCard">
        <div class="card">
            <div class="card__header">{{ __('Vérifier l\'adresse mail') }}</div>

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
</section>
@endsection
