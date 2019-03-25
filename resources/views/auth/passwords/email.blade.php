@extends('layouts.app')

@section('content')
<div class="loginContainer">
    <div class="loginContainer__filter">&nbsp;</div>

    <div class="globalCard">
        <div class="card">
            <div class="card__header">{{ __('Restaurer le mot de passe') }}</div>

            <div class="card__body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="form">
                    @csrf

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('Envoyer le lien de restauration') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
