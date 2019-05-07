@extends('layouts.app')

@section('content')
<section class="loginContainer">
    <h2 class="heading2 hidden" role="heading" aria-level="2">Page de réinitialisation</h2>
    <div class="loginContainer__filter">
        <span class="notEmpty">&nbsp;</span>
    </div>

    <div class="globalCard">
        <div class="card">
            <div class="card__header">{{ __('Réinitialiser le mot de passe') }}</div>

            <div class="card__body">
                <form method="POST" action="{{ route('password.update') }}" class="form">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ $email ?? old('email') }}">
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
                            {{ __('Réinitialiser le mot de passe') }}
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
