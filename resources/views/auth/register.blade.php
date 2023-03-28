<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kyy Laundry | SignIn/SignUp</title>
        <link rel="stylesheet" href="{{ asset('css/login&register.css')}}">

</head>
<body>
<nav class="navbar navbar-light bg-light" style="background-color: #4EA685">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/back.png')}}" width="50" height="50"></a>
</nav>
<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror						
                        </div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input id="telephone" type="telephone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" placeholder="Telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror						
                        </div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror						
                        </div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
						</div>
						<button type="submit" class="btn btn-primary">
                        {{ __('Daftar') }}
                        </button>
						<p>
							<span>
								Sudah Mempunyai Akun?
							</span>
							<b onclick="toggle()" class="pointer">
								Login disini
							</b>
						</p>
                    </form>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<button type="submit">
                        {{ __('Login') }}
                        </button>
						<p>
							<b>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                @endif
							</b>
						</p>
						<p>
							<span>
								Tidak Punya Akun?
							</span>
							<b onclick="toggle()" class="pointer">
								Daftar disini
							</b>
						</p>
                    </form>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Login
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Daftar
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
</body>

<script>
let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-up')
	container.classList.toggle('sign-in')
}

setTimeout(() => {
	container.classList.add('sign-up')
}, 200)</script>
