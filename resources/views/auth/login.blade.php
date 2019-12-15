@extends('layouts.app')

@section('content')
<div class="container">

    <form class="sign-in-form" method="post" action="{{ route('login',app()->getLocale()) }}">
        @csrf
		<div class="card">
			<div class="card-body">
				<a href="/" class="brand text-center d-block m-b-20">
					{{-- <img src="http://ecall.co.ke/assets/img/ECallv3LogoAlarmServerVector (200px).png" alt="Ecall Logo"> --}}
				</a>
				<h5 class="sign-in-heading text-center m-b-20">{{ __('Login') }}</h5>
								<div class="form-group">
					<label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email" >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
				<div class="form-group">
					<label for="password" class="sr-only">Password</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="checkbox m-b-10 m-t-20  flex-row justify-content-between align-items-center">
					<div class="custom-control custom-checkbox checkbox-primary form-check m-0 ">
                            <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label custom-control-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
						
					</div>
                    
                    <button type="submit" class="btn btn-primary btn-floating   btn-sm float-right login-btn">
                            {{ __('Login') }}
                        </button>

				</div>
				
                @if (Route::has('password.request'))
                <a class=" float-right forgot-pwd-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
			</div>

		</div>
	</form>
</div>
@endsection
