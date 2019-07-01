@extends('layouts.app')

@section('content')

<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">

                    @csrf
					<span class="login100-form-title p-b-53">
						Login
					</span>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="email" name="email" >
                        <span class="focus-input100"></span>
					</div>
                    <small style="color:red">
                            @error('email')
                                Email não cadatrado
                            @enderror
                        </small><br>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>

					</div>
                    <small style="color:red">
                        @error('password')
                            Senha incorreta
                        @enderror
                    </small>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Não esta registrado?
						</span>

                        <a href="{{route('register')}}" class="txt2 bo1">
							Registrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
@endsection
