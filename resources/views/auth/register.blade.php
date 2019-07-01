@extends('layouts.app')

@section('content')
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                        @csrf

                        <span class="login100-form-title p-b-53">
                            Registro
                        </span>

                        <div class="p-t-31 p-b-9">
                                <span class="txt1">
                                    Nome
                                </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>



					<div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


					<div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Senha
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>



					<div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Confirme sua senha
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="container-login100-form-btn m-t-17">
                                <button class="login100-form-btn">
                                    Registrar
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
