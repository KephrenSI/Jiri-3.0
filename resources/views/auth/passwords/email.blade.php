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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="form">
                    @csrf

                    <div class="labelInput">
                        <label for="email" class="labelInput__label label">{{ __('Adresse mail') }}</label>
                        <input id="email" type="email" class="labelInput__input input" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="labelInput">
                        <button type="submit" class="labelInput__button">
                            {{ __('Envoyer le lien de réinitialisation') }}
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
