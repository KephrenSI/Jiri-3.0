@extends('layouts.app')

@section('content')
<div class="loginContainer">
    <div class="loginContainer__filter">&nbsp;</div>

    <div class="globalCard">
        <div class="card">
            <div class="card-header">{{ __('Restaurer le mot de passe') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}" class="form">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                    </div>

                    <div class="labelInput">
                        <label for="password" class="labelInput__label label">{{ __('Mot de passe') }}</label>
                        <password-input></password-input>
                    </div>

                    <div class="labelInput">
                        <label for="password-confirm" class="labelInput__label label">{{ __('Confirmer le mot de passe') }}</label>
                        <confirm-password-input></confirm-password-input>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Restaurer le mot de passe') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
